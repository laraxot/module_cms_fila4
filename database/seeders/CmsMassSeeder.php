<?php

declare(strict_types=1);

namespace Modules\Cms\Database\Seeders;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Cms\Models\Conf;
use Modules\Cms\Models\Menu;
use Modules\Cms\Models\Module;
use Modules\Cms\Models\Page;
use Modules\Cms\Models\PageContent;
use Modules\Cms\Models\Section;
<<<<<<< HEAD
=======
=======
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
>>>>>>> b93ef594b4 (.)
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Cms\Models\Conf;
use Modules\Cms\Models\Menu;
use Modules\Cms\Models\Module;
use Modules\Cms\Models\Page;
use Modules\Cms\Models\PageContent;
use Modules\Cms\Models\Section;
<<<<<<< HEAD
use Modules\Cms\Models\Menu;
use Modules\Cms\Models\Module;
use Modules\Cms\Models\Conf;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Modules\Cms\Models\Page;
use Modules\Cms\Models\PageContent;
use Modules\Cms\Models\Section;
use Modules\Cms\Models\Menu;
use Modules\Cms\Models\Module;
use Modules\Cms\Models\Conf;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

/**
 * Seeder per creare grandi quantità di dati per il modulo Cms.
 */
class CmsMassSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Esegue il seeding del database.
     */
    public function run(): void
    {
        $this->command->info('🚀 Inizializzazione seeding di massa per modulo Cms...');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $startTime = microtime(true);

        try {
            // 1. Creazione moduli CMS
            $this->createCmsModules();

            // 2. Creazione sezioni
            $this->createSections();

            // 3. Creazione pagine
            $this->createPages();

            // 4. Creazione contenuti delle pagine
            $this->createPageContents();

            // 5. Creazione menu
            $this->createMenus();

            // 6. Creazione configurazioni
            $this->createConfigurations();

            $endTime = microtime(true);
            $executionTime = round($endTime - $startTime, 2);

            $this->command->info("🎉 Seeding modulo Cms completato in {$executionTime} secondi!");
            $this->displaySummary();
        } catch (Exception $e) {
            $this->command->error('❌ Errore durante il seeding: ' . $e->getMessage());
            throw $e;
        }
    }

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $startTime = microtime(true);

        try {
            // 1. Creazione moduli CMS
            $this->createCmsModules();

            // 2. Creazione sezioni
            $this->createSections();

            // 3. Creazione pagine
            $this->createPages();

            // 4. Creazione contenuti delle pagine
            $this->createPageContents();

            // 5. Creazione menu
            $this->createMenus();

            // 6. Creazione configurazioni
            $this->createConfigurations();

            $endTime = microtime(true);
            $executionTime = round($endTime - $startTime, 2);

            $this->command->info("🎉 Seeding modulo Cms completato in {$executionTime} secondi!");
            $this->displaySummary();
        } catch (Exception $e) {
            $this->command->error('❌ Errore durante il seeding: ' . $e->getMessage());
            throw $e;
        }
    }
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $startTime = microtime(true);
        
        try {
            // 1. Creazione moduli CMS
            $this->createCmsModules();
            
            // 2. Creazione sezioni
            $this->createSections();
            
            // 3. Creazione pagine
            $this->createPages();
            
            // 4. Creazione contenuti delle pagine
            $this->createPageContents();
            
            // 5. Creazione menu
            $this->createMenus();
            
            // 6. Creazione configurazioni
            $this->createConfigurations();
            
            $endTime = microtime(true);
            $executionTime = round($endTime - $startTime, 2);
            
            $this->command->info("🎉 Seeding modulo Cms completato in {$executionTime} secondi!");
            $this->displaySummary();
            
        } catch (\Exception $e) {
            $this->command->error("❌ Errore durante il seeding: " . $e->getMessage());
            throw $e;
        }
    }
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    /**
     * Crea moduli CMS.
     */
    private function createCmsModules(): void
    {
        $this->command->info('🔧 Creazione moduli CMS...');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        // Crea 20 moduli CMS
        $modules = Module::factory(20)->create([
            'is_active' => true,
            'created_at' => Carbon::now()->subDays(rand(1, 365)),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $this->command->info('✅ Creati ' . $modules->count() . ' moduli CMS');
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $this->command->info("✅ Creati " . $modules->count() . " moduli CMS");
    }
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $this->command->info('✅ Creati ' . $modules->count() . ' moduli CMS');
    }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    /**
     * Crea sezioni.
     */
    private function createSections(): void
    {
        $this->command->info('📑 Creazione sezioni...');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        // Crea 100 sezioni
        $sections = Section::factory(100)->create([
            'is_active' => true,
            'created_at' => Carbon::now()->subDays(rand(1, 365)),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $this->command->info('✅ Create ' . $sections->count() . ' sezioni');
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $this->command->info("✅ Create " . $sections->count() . " sezioni");
    }
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $this->command->info('✅ Create ' . $sections->count() . ' sezioni');
    }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    /**
     * Crea pagine.
     */
    private function createPages(): void
    {
        $this->command->info('📄 Creazione pagine...');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        // Crea 500 pagine
        $pages = Page::factory(500)->create([
            'is_active' => true,
            'created_at' => Carbon::now()->subDays(rand(1, 365)),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $this->command->info('✅ Create ' . $pages->count() . ' pagine');
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $this->command->info("✅ Create " . $pages->count() . " pagine");
    }
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $this->command->info('✅ Create ' . $pages->count() . ' pagine');
    }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    /**
     * Crea contenuti delle pagine.
     */
    private function createPageContents(): void
    {
        $this->command->info('📝 Creazione contenuti delle pagine...');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        // Crea 1000 contenuti di pagina
        $contents = PageContent::factory(1000)->create([
            'created_at' => Carbon::now()->subDays(rand(1, 365)),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $this->command->info('✅ Creati ' . $contents->count() . ' contenuti di pagina');
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $this->command->info("✅ Creati " . $contents->count() . " contenuti di pagina");
    }
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $this->command->info('✅ Creati ' . $contents->count() . ' contenuti di pagina');
    }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    /**
     * Crea menu.
     */
    private function createMenus(): void
    {
        $this->command->info('🍽️ Creazione menu...');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        // Crea 50 menu
        $menus = Menu::factory(50)->create([
            'is_active' => true,
            'created_at' => Carbon::now()->subDays(rand(1, 365)),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $this->command->info('✅ Creati ' . $menus->count() . ' menu');
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $this->command->info("✅ Creati " . $menus->count() . " menu");
    }
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $this->command->info('✅ Creati ' . $menus->count() . ' menu');
    }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    /**
     * Crea configurazioni.
     */
    private function createConfigurations(): void
    {
        $this->command->info('⚙️ Creazione configurazioni...');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        // Conf è un modello Sushi che ottiene i dati da TenantService::getConfigNames()
        // Non supporta factories, i dati sono caricati dinamicamente
        $configs = Conf::all();

        $this->command->info('✅ Caricati ' . $configs->count() . ' configurazioni da Sushi');
    }

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Conf è un modello Sushi che ottiene i dati da TenantService::getConfigNames()
        // Non supporta factories, i dati sono caricati dinamicamente
        $configs = Conf::all();

        $this->command->info('✅ Caricati ' . $configs->count() . ' configurazioni da Sushi');
    }
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        // Conf è un modello Sushi che ottiene i dati da TenantService::getConfigNames()
        // Non supporta factories, i dati sono caricati dinamicamente
        $configs = Conf::all();
        
        $this->command->info("✅ Caricati " . $configs->count() . " configurazioni da Sushi");
    }
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    /**
     * Mostra un riassunto dei dati creati.
     */
    private function displaySummary(): void
    {
        $this->command->info('📊 RIASSUNTO DATI CREATI PER MODULO CMS:');
        $this->command->info('┌─────────────────────────────────────┐');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        try {
            // Conta moduli
            $totalModules = Module::count();
            $activeModules = Module::where('is_active', true)->count();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)

            $this->command->info('│ 🔧 Moduli totali:             ' .
            str_pad((string) $totalModules, 6, ' ', STR_PAD_LEFT) .
                ' │');
            $this->command->info('│    - Attivi:                  ' .
            str_pad((string) $activeModules, 6, ' ', STR_PAD_LEFT) .
                ' │');

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
            // Conta sezioni
            $totalSections = Section::count();
            $activeSections = Section::where('is_active', true)->count();

            $this->command->info('│ 📑 Sezioni totali:            ' .
            str_pad((string) $totalSections, 6, ' ', STR_PAD_LEFT) .
                ' │');
            $this->command->info('│    - Attive:                  ' .
            str_pad((string) $activeSections, 6, ' ', STR_PAD_LEFT) .
                ' │');

            // Conta pagine
            $totalPages = Page::count();
            $activePages = Page::where('is_active', true)->count();

            $this->command->info('│ 📄 Pagine totali:             ' .
            str_pad((string) $totalPages, 6, ' ', STR_PAD_LEFT) .
                ' │');
            $this->command->info('│    - Attive:                  ' .
            str_pad((string) $activePages, 6, ' ', STR_PAD_LEFT) .
                ' │');

            // Conta contenuti
            $totalContents = PageContent::count();

            $this->command->info('│ 📝 Contenuti totali:          ' .
            str_pad((string) $totalContents, 6, ' ', STR_PAD_LEFT) .
                ' │');

            // Conta menu
            $totalMenus = Menu::count();
            $activeMenus = Menu::where('is_active', true)->count();

            $this->command->info('│ 🍽️ Menu totali:               ' .
            str_pad((string) $totalMenus, 6, ' ', STR_PAD_LEFT) .
                ' │');
            $this->command->info('│    - Attivi:                  ' .
            str_pad((string) $activeMenus, 6, ' ', STR_PAD_LEFT) .
                ' │');

            // Conta configurazioni
            $totalConfigs = Conf::count();

            $this->command->info('│ ⚙️ Configurazioni totali:     ' .
            str_pad((string) $totalConfigs, 6, ' ', STR_PAD_LEFT) .
                ' │');
        } catch (Exception $e) {
            $this->command->info('│ ❌ Errore nel conteggio: ' . $e->getMessage());
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            
            $this->command->info("│ 🔧 Moduli totali:             " . str_pad((string)$totalModules, 6, ' ', STR_PAD_LEFT) . " │");
            $this->command->info("│    - Attivi:                  " . str_pad((string)$activeModules, 6, ' ', STR_PAD_LEFT) . " │");
            
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
            // Conta sezioni
            $totalSections = Section::count();
            $activeSections = Section::where('is_active', true)->count();

            $this->command->info('│ 📑 Sezioni totali:            ' .
            str_pad((string) $totalSections, 6, ' ', STR_PAD_LEFT) .
                ' │');
            $this->command->info('│    - Attive:                  ' .
            str_pad((string) $activeSections, 6, ' ', STR_PAD_LEFT) .
                ' │');

            // Conta pagine
            $totalPages = Page::count();
            $activePages = Page::where('is_active', true)->count();

            $this->command->info('│ 📄 Pagine totali:             ' .
            str_pad((string) $totalPages, 6, ' ', STR_PAD_LEFT) .
                ' │');
            $this->command->info('│    - Attive:                  ' .
            str_pad((string) $activePages, 6, ' ', STR_PAD_LEFT) .
                ' │');

            // Conta contenuti
            $totalContents = PageContent::count();

            $this->command->info('│ 📝 Contenuti totali:          ' .
            str_pad((string) $totalContents, 6, ' ', STR_PAD_LEFT) .
                ' │');

            // Conta menu
            $totalMenus = Menu::count();
            $activeMenus = Menu::where('is_active', true)->count();

            $this->command->info('│ 🍽️ Menu totali:               ' .
            str_pad((string) $totalMenus, 6, ' ', STR_PAD_LEFT) .
                ' │');
            $this->command->info('│    - Attivi:                  ' .
            str_pad((string) $activeMenus, 6, ' ', STR_PAD_LEFT) .
                ' │');

            // Conta configurazioni
            $totalConfigs = Conf::count();

            $this->command->info('│ ⚙️ Configurazioni totali:     ' .
            str_pad((string) $totalConfigs, 6, ' ', STR_PAD_LEFT) .
                ' │');
        } catch (Exception $e) {
            $this->command->info('│ ❌ Errore nel conteggio: ' . $e->getMessage());
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            // Conta sezioni
            $totalSections = Section::count();
            $activeSections = Section::where('is_active', true)->count();
            
            $this->command->info("│ 📑 Sezioni totali:            " . str_pad((string)$totalSections, 6, ' ', STR_PAD_LEFT) . " │");
            $this->command->info("│    - Attive:                  " . str_pad((string)$activeSections, 6, ' ', STR_PAD_LEFT) . " │");
            
            // Conta pagine
            $totalPages = Page::count();
            $activePages = Page::where('is_active', true)->count();
            
            $this->command->info("│ 📄 Pagine totali:             " . str_pad((string)$totalPages, 6, ' ', STR_PAD_LEFT) . " │");
            $this->command->info("│    - Attive:                  " . str_pad((string)$activePages, 6, ' ', STR_PAD_LEFT) . " │");
            
            // Conta contenuti
            $totalContents = PageContent::count();
            
            $this->command->info("│ 📝 Contenuti totali:          " . str_pad((string)$totalContents, 6, ' ', STR_PAD_LEFT) . " │");
            
            // Conta menu
            $totalMenus = Menu::count();
            $activeMenus = Menu::where('is_active', true)->count();
            
            $this->command->info("│ 🍽️ Menu totali:               " . str_pad((string)$totalMenus, 6, ' ', STR_PAD_LEFT) . " │");
            $this->command->info("│    - Attivi:                  " . str_pad((string)$activeMenus, 6, ' ', STR_PAD_LEFT) . " │");
            
            // Conta configurazioni
            $totalConfigs = Conf::count();
            
            $this->command->info("│ ⚙️ Configurazioni totali:     " . str_pad((string)$totalConfigs, 6, ' ', STR_PAD_LEFT) . " │");
            
        } catch (\Exception $e) {
            $this->command->info("│ ❌ Errore nel conteggio: " . $e->getMessage());
        }
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $this->command->info('└─────────────────────────────────────┘');
        $this->command->info('');
    }
}
