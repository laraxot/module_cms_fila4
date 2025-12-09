<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Contracts\Console\Kernel;

=======
>>>>>>> origin/develop
/**
 * Business Logic Analysis Script
 * Analyzes all modules for models, factories, and seeders
 */

require_once __DIR__ . '/laravel/vendor/autoload.php';

$app = require_once __DIR__ . '/laravel/bootstrap/app.php';
<<<<<<< HEAD
$app->make(Kernel::class)->bootstrap();
=======
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
>>>>>>> origin/develop

class BusinessLogicAnalyzer
{
    private array $modules = [];
    private array $analysis = [];
    private string $basePath;

    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function analyze(): array
    {
        $this->discoverModules();
<<<<<<< HEAD

        foreach ($this->modules as $module) {
            $this->analyzeModule($module);
        }

=======
        
        foreach ($this->modules as $module) {
            $this->analyzeModule($module);
        }
        
>>>>>>> origin/develop
        return $this->analysis;
    }

    private function discoverModules(): void
    {
        // Check both possible module locations
        $laravelModulesPath = $this->basePath . '/laravel/Modules';
        $rootModulesPath = $this->basePath . '/Modules';
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        $modulesPath = null;
        if (is_dir($laravelModulesPath)) {
            $modulesPath = $laravelModulesPath;
        } elseif (is_dir($rootModulesPath)) {
            $modulesPath = $rootModulesPath;
        } else {
            throw new Exception("Modules directory not found. Checked: {$laravelModulesPath} and {$rootModulesPath}");
        }
<<<<<<< HEAD

        echo "Using modules path: {$modulesPath}\n";

=======
        
        echo "Using modules path: {$modulesPath}\n";
        
>>>>>>> origin/develop
        $directories = array_filter(
            scandir($modulesPath),
            fn($item) => $item !== '.' && $item !== '..' && is_dir($modulesPath . '/' . $item)
        );
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        $this->modules = array_values($directories);
        echo "Found modules: " . implode(', ', $this->modules) . "\n\n";
    }

    private function analyzeModule(string $moduleName): void
    {
        echo "Analyzing module: {$moduleName}\n";
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        $moduleData = [
            'name' => $moduleName,
            'models' => [],
            'factories' => [],
            'seeders' => [],
            'missing_factories' => [],
            'missing_seeders' => []
        ];

        // Determine base module path
        $laravelModulePath = $this->basePath . "/laravel/Modules/{$moduleName}";
        $rootModulePath = $this->basePath . "/Modules/{$moduleName}";
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        $moduleBasePath = null;
        if (is_dir($laravelModulePath)) {
            $moduleBasePath = $laravelModulePath;
        } elseif (is_dir($rootModulePath)) {
            $moduleBasePath = $rootModulePath;
        }
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        if ($moduleBasePath) {
            // Find models
            $modelsPath = $moduleBasePath . "/app/Models";
            if (is_dir($modelsPath)) {
                $moduleData['models'] = $this->findModels($modelsPath);
            }

            // Find factories
            $factoriesPath = $moduleBasePath . "/database/factories";
            if (is_dir($factoriesPath)) {
                $moduleData['factories'] = $this->findFactories($factoriesPath);
            }

            // Find seeders
            $seedersPath = $moduleBasePath . "/database/seeders";
            if (is_dir($seedersPath)) {
                $moduleData['seeders'] = $this->findSeeders($seedersPath);
            }
        }

        // Check for missing factories and seeders
        foreach ($moduleData['models'] as $model) {
            $factoryName = $model . 'Factory';
            if (!in_array($factoryName, $moduleData['factories'])) {
                $moduleData['missing_factories'][] = $factoryName;
            }

            $seederName = $model . 'Seeder';
            if (!in_array($seederName, $moduleData['seeders'])) {
                $moduleData['missing_seeders'][] = $seederName;
            }
        }

        $this->analysis[$moduleName] = $moduleData;
        $this->printModuleAnalysis($moduleData);
    }

    private function findModels(string $path): array
    {
        $models = [];
        $files = glob($path . '/*.php');
<<<<<<< HEAD

        foreach ($files as $file) {
            $filename = basename($file, '.php');

=======
        
        foreach ($files as $file) {
            $filename = basename($file, '.php');
            
>>>>>>> origin/develop
            // Skip base models, traits, policies, and .old files
            if (strpos($filename, 'Base') === 0 || 
                strpos($filename, 'Trait') !== false ||
                $filename === 'BaseModel' ||
                $filename === 'BasePivot' ||
                strpos($filename, '.old') !== false ||
                is_dir($file)) {
                continue;
            }
<<<<<<< HEAD

=======
            
>>>>>>> origin/develop
            // Check if it's actually a model by reading the file
            $content = file_get_contents($file);
            if (strpos($content, 'extends') !== false && 
                (strpos($content, 'Model') !== false || strpos($content, 'BaseModel') !== false)) {
                $models[] = $filename;
            }
        }
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        return $models;
    }

    private function findFactories(string $path): array
    {
        $factories = [];
        $files = glob($path . '/*.php');
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        foreach ($files as $file) {
            $filename = basename($file, '.php');
            if (strpos($filename, 'Factory') !== false) {
                $factories[] = $filename;
            }
        }
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        return $factories;
    }

    private function findSeeders(string $path): array
    {
        $seeders = [];
        $files = glob($path . '/*.php');
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        foreach ($files as $file) {
            $filename = basename($file, '.php');
            if (strpos($filename, 'Seeder') !== false) {
                $seeders[] = $filename;
            }
        }
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        return $seeders;
    }

    private function printModuleAnalysis(array $moduleData): void
    {
        echo "  Models: " . count($moduleData['models']) . " (" . implode(', ', $moduleData['models']) . ")\n";
        echo "  Factories: " . count($moduleData['factories']) . " (" . implode(', ', $moduleData['factories']) . ")\n";
        echo "  Seeders: " . count($moduleData['seeders']) . " (" . implode(', ', $moduleData['seeders']) . ")\n";
<<<<<<< HEAD

        if (!empty($moduleData['missing_factories'])) {
            echo "  ❌ Missing Factories: " . implode(', ', $moduleData['missing_factories']) . "\n";
        }

        if (!empty($moduleData['missing_seeders'])) {
            echo "  ❌ Missing Seeders: " . implode(', ', $moduleData['missing_seeders']) . "\n";
        }

=======
        
        if (!empty($moduleData['missing_factories'])) {
            echo "  ❌ Missing Factories: " . implode(', ', $moduleData['missing_factories']) . "\n";
        }
        
        if (!empty($moduleData['missing_seeders'])) {
            echo "  ❌ Missing Seeders: " . implode(', ', $moduleData['missing_seeders']) . "\n";
        }
        
>>>>>>> origin/develop
        echo "\n";
    }

    public function generateReport(): void
    {
        echo "=== BUSINESS LOGIC ANALYSIS REPORT ===\n\n";
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        $totalModels = 0;
        $totalFactories = 0;
        $totalSeeders = 0;
        $totalMissingFactories = 0;
        $totalMissingSeeders = 0;
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        foreach ($this->analysis as $moduleName => $data) {
            $totalModels += count($data['models']);
            $totalFactories += count($data['factories']);
            $totalSeeders += count($data['seeders']);
            $totalMissingFactories += count($data['missing_factories']);
            $totalMissingSeeders += count($data['missing_seeders']);
        }
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        echo "SUMMARY:\n";
        echo "- Total Modules: " . count($this->analysis) . "\n";
        echo "- Total Models: {$totalModels}\n";
        echo "- Total Factories: {$totalFactories}\n";
        echo "- Total Seeders: {$totalSeeders}\n";
        echo "- Missing Factories: {$totalMissingFactories}\n";
        echo "- Missing Seeders: {$totalMissingSeeders}\n\n";
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        if ($totalMissingFactories > 0 || $totalMissingSeeders > 0) {
            echo "MISSING COMPONENTS:\n";
            foreach ($this->analysis as $moduleName => $data) {
                if (!empty($data['missing_factories']) || !empty($data['missing_seeders'])) {
                    echo "Module {$moduleName}:\n";
                    if (!empty($data['missing_factories'])) {
                        echo "  Missing Factories: " . implode(', ', $data['missing_factories']) . "\n";
                    }
                    if (!empty($data['missing_seeders'])) {
                        echo "  Missing Seeders: " . implode(', ', $data['missing_seeders']) . "\n";
                    }
                }
            }
        }
    }

    public function generateTinkerCommands(): void
    {
        echo "\n=== TINKER COMMANDS TO CREATE 100 RECORDS ===\n\n";
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        foreach ($this->analysis as $moduleName => $data) {
            if (!empty($data['models'])) {
                echo "// Module: {$moduleName}\n";
                foreach ($data['models'] as $model) {
                    $factoryExists = in_array($model . 'Factory', $data['factories']);
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
    echo "Error: " . $e->getMessage() . "\n";
}
