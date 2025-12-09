<?php

declare(strict_types=1);

use Illuminate\Contracts\Console\Kernel;
use Webmozart\Assert\Assert;

use function Safe\file_get_contents;
use function Safe\glob;
use function Safe\scandir;

/**
 * Business Logic Analysis Script
 * Analyzes all modules for models, factories, and seeders
 */

require_once __DIR__.'/laravel/vendor/autoload.php';

$app = require_once __DIR__.'/laravel/bootstrap/app.php';
Assert::object($app, 'Application must be an object');
if (method_exists($app, 'make')) {
    $kernel = $app->make(Kernel::class);
    Assert::object($kernel, 'Kernel must be an object');
    if (method_exists($kernel, 'bootstrap')) {
        $kernel->bootstrap();
    }
}

class BusinessLogicAnalyzer
{
    private array $modules = [];

    private array $analysis = [];

    public function __construct(private readonly string $basePath)
    {
    }

    public function analyze(): array
    {
        $this->discoverModules();

        foreach ($this->modules as $module) {
            Assert::string($module, 'Module name must be a string');
            $this->analyzeModule($module);
        }

        return $this->analysis;
    }

    private function discoverModules(): void
    {
        // Check both possible module locations
        $laravelModulesPath = $this->basePath.'/laravel/Modules';
        $rootModulesPath = $this->basePath.'/Modules';

        $modulesPath = null;
        if (is_dir($laravelModulesPath)) {
            $modulesPath = $laravelModulesPath;
        } elseif (is_dir($rootModulesPath)) {
            $modulesPath = $rootModulesPath;
        } else {
            throw new Exception("Modules directory not found. Checked: {$laravelModulesPath} and {$rootModulesPath}");
        }

        echo "Using modules path: {$modulesPath}\n";

        $directories = array_filter(
            scandir($modulesPath),
            function ($item) use ($modulesPath): bool {
                Assert::string($item, 'Directory item must be a string');
                return $item !== '.' && $item !== '..' && is_dir($modulesPath.'/'.$item);
            }
        );

        $this->modules = array_values($directories);
        echo 'Found modules: '.implode(', ', $this->modules)."\n\n";
    }

    private function analyzeModule(string $moduleName): void
    {
        echo "Analyzing module: {$moduleName}\n";

        $moduleData = [
            'name' => $moduleName,
            'models' => [],
            'factories' => [],
            'seeders' => [],
            'missing_factories' => [],
            'missing_seeders' => [],
        ];

        // Determine base module path
        $laravelModulePath = $this->basePath."/laravel/Modules/{$moduleName}";
        $rootModulePath = $this->basePath."/Modules/{$moduleName}";

        $moduleBasePath = null;
        if (is_dir($laravelModulePath)) {
            $moduleBasePath = $laravelModulePath;
        } elseif (is_dir($rootModulePath)) {
            $moduleBasePath = $rootModulePath;
        }

        if ($moduleBasePath) {
            // Find models
            $modelsPath = $moduleBasePath.'/app/Models';
            if (is_dir($modelsPath)) {
                $moduleData['models'] = $this->findModels($modelsPath);
            }

            // Find factories
            $factoriesPath = $moduleBasePath.'/database/factories';
            if (is_dir($factoriesPath)) {
                $moduleData['factories'] = $this->findFactories($factoriesPath);
            }

            // Find seeders
            $seedersPath = $moduleBasePath.'/database/seeders';
            if (is_dir($seedersPath)) {
                $moduleData['seeders'] = $this->findSeeders($seedersPath);
            }
        }

        // Check for missing factories and seeders
        foreach ($moduleData['models'] as $model) {
            Assert::string($model, 'Model name must be a string');
            $factoryName = $model.'Factory';
            if (! in_array($factoryName, $moduleData['factories'])) {
                $moduleData['missing_factories'][] = $factoryName;
            }

            $seederName = $model.'Seeder';
            if (! in_array($seederName, $moduleData['seeders'])) {
                $moduleData['missing_seeders'][] = $seederName;
            }
        }

        $this->analysis[$moduleName] = $moduleData;
        $this->printModuleAnalysis($moduleData);
    }

    private function findModels(string $path): array
    {
        $models = [];
        $files = glob($path.'/*.php');

        foreach ($files as $file) {
            if (is_string($file)) {
                $filename = basename($file, '.php');

                // Skip base models, traits, policies, and .old files
                if (str_starts_with($filename, 'Base') ||
                    str_contains($filename, 'Trait') ||
                    $filename === 'BaseModel' ||
                    $filename === 'BasePivot' ||
                    str_contains($filename, '.old') ||
                    is_dir($file)) {
                    continue;
                }

                // Check if it's actually a model by reading the file
                $content = file_get_contents($file);
                if (str_contains($content, 'extends') &&
                    (str_contains($content, 'Model') || str_contains($content, 'BaseModel'))) {
                    $models[] = $filename;
                }
            }
        }

        return $models;
    }

    private function findFactories(string $path): array
    {
        $factories = [];
        $files = glob($path.'/*.php');

        foreach ($files as $file) {
            if (is_string($file)) {
                $filename = basename($file, '.php');
                if (str_contains($filename, 'Factory')) {
                    $factories[] = $filename;
                }
            }
        }

        return $factories;
    }

    private function findSeeders(string $path): array
    {
        $seeders = [];
        $files = glob($path.'/*.php');

        foreach ($files as $file) {
            if (is_string($file)) {
                $filename = basename($file, '.php');
                if (str_contains($filename, 'Seeder')) {
                    $seeders[] = $filename;
                }
            }
        }

        return $seeders;
    }

    private function printModuleAnalysis(array $moduleData): void
    {
        Assert::isArray($moduleData['models'], 'Models must be an array');
        Assert::isArray($moduleData['factories'], 'Factories must be an array');
        Assert::isArray($moduleData['seeders'], 'Seeders must be an array');

        echo '  Models: '.count($moduleData['models']).' ('.implode(', ', $moduleData['models']).")\n";
        echo '  Factories: '.count($moduleData['factories']).' ('.implode(', ', $moduleData['factories']).")\n";
        echo '  Seeders: '.count($moduleData['seeders']).' ('.implode(', ', $moduleData['seeders']).")\n";

        if (! empty($moduleData['missing_factories'])) {
            Assert::isArray($moduleData['missing_factories'], 'Missing factories must be an array');
            echo '  ❌ Missing Factories: '.implode(', ', $moduleData['missing_factories'])."\n";
        }

        if (! empty($moduleData['missing_seeders'])) {
            Assert::isArray($moduleData['missing_seeders'], 'Missing seeders must be an array');
            echo '  ❌ Missing Seeders: '.implode(', ', $moduleData['missing_seeders'])."\n";
        }

        echo "\n";
    }

    public function generateReport(): void
    {
        echo "=== BUSINESS LOGIC ANALYSIS REPORT ===\n\n";

        $totalModels = 0;
        $totalFactories = 0;
        $totalSeeders = 0;
        $totalMissingFactories = 0;
        $totalMissingSeeders = 0;

        foreach ($this->analysis as $moduleName => $data) {
            Assert::isArray($data, 'Module data must be an array');

            $models = isset($data['models']) && is_array($data['models']) ? $data['models'] : [];
            $factories = isset($data['factories']) && is_array($data['factories']) ? $data['factories'] : [];
            $seeders = isset($data['seeders']) && is_array($data['seeders']) ? $data['seeders'] : [];
            $missingFactories = isset($data['missing_factories']) && is_array($data['missing_factories']) ? $data['missing_factories'] : [];
            $missingSeeders = isset($data['missing_seeders']) && is_array($data['missing_seeders']) ? $data['missing_seeders'] : [];

            $totalModels += count($models);
            $totalFactories += count($factories);
            $totalSeeders += count($seeders);
            $totalMissingFactories += count($missingFactories);
            $totalMissingSeeders += count($missingSeeders);
        }

        echo "SUMMARY:\n";
        echo '- Total Modules: '.count($this->analysis)."\n";
        echo "- Total Models: {$totalModels}\n";
        echo "- Total Factories: {$totalFactories}\n";
        echo "- Total Seeders: {$totalSeeders}\n";
        echo "- Missing Factories: {$totalMissingFactories}\n";
        echo "- Missing Seeders: {$totalMissingSeeders}\n\n";

        if ($totalMissingFactories > 0 || $totalMissingSeeders > 0) {
            echo "MISSING COMPONENTS:\n";
            foreach ($this->analysis as $moduleName => $data) {
                Assert::isArray($data, 'Module data must be an array');

                $missingFactories = isset($data['missing_factories']) && is_array($data['missing_factories']) ? $data['missing_factories'] : [];
                $missingSeeders = isset($data['missing_seeders']) && is_array($data['missing_seeders']) ? $data['missing_seeders'] : [];

                if (! empty($missingFactories) || ! empty($missingSeeders)) {
                    echo "Module {$moduleName}:\n";
                    if (! empty($missingFactories)) {
                        echo '  Missing Factories: '.implode(', ', $missingFactories)."\n";
                    }
                    if (! empty($missingSeeders)) {
                        echo '  Missing Seeders: '.implode(', ', $missingSeeders)."\n";
                    }
                }
            }
        }
    }

    public function generateTinkerCommands(): void
    {
        echo "\n=== TINKER COMMANDS TO CREATE 100 RECORDS ===\n\n";

        foreach ($this->analysis as $moduleName => $data) {
            Assert::string($moduleName, 'Module name must be a string');
            Assert::isArray($data, 'Module data must be an array');

            if (! empty($data['models'])) {
                Assert::isArray($data['models'], 'Models must be an array');
                Assert::isArray($data['factories'], 'Factories must be an array');

                echo "// Module: {$moduleName}\n";
                foreach ($data['models'] as $model) {
                    Assert::string($model, 'Model name must be a string');
                    $factoryExists = in_array($model.'Factory', $data['factories']);
                    if ($factoryExists) {
                        echo "\\Modules\\{$moduleName}\\Models\\{$model}::factory()->count(100)->create();\n";
                    } else {
                        echo "// ❌ No factory for {$model} - create factory first\n";
                    }
                }
                echo "\n";
            }
        }
    }
}

// Run the analysis
try {
    $analyzer = new BusinessLogicAnalyzer(__DIR__);
    $analysis = $analyzer->analyze();
    $analyzer->generateReport();
    $analyzer->generateTinkerCommands();
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage()."\n";
}
