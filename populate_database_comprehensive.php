<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Contracts\Console\Kernel;
use Modules\User\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Modules\Geo\Models\Address;
use Modules\Geo\Models\Location;
use Modules\User\Models\Team;
use Modules\SaluteOra\Models\Studio;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Models\Report;
use Modules\SaluteOra\Models\Profile;
use Modules\Activity\Models\Activity;

=======
>>>>>>> origin/develop
/**
 * Comprehensive Database Population Script
 * 
 * This script populates the database with realistic business data
 * following the proper dependency order and handling schema issues.
 */

require_once __DIR__ . '/laravel/vendor/autoload.php';

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Bootstrap Laravel
$app = require_once __DIR__ . '/laravel/bootstrap/app.php';
<<<<<<< HEAD
$app->make(Kernel::class)->bootstrap();
=======
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
>>>>>>> origin/develop

class DatabasePopulator
{
    private array $results = [];
    private int $totalRecords = 0;

    public function run(): void
    {
        echo "🚀 Starting comprehensive database population...\n\n";
<<<<<<< HEAD

        $startTime = microtime(true);

        try {
            // Phase 1: Core System Data
            $this->populateSystemData();

            // Phase 2: Geographic Data  
            $this->populateGeographicData();

            // Phase 3: User Management
            $this->populateUserData();

            // Phase 4: Business Logic (SaluteOra)
            $this->populateBusinessData();

            // Phase 5: Content Management
            $this->populateContentData();

            $endTime = microtime(true);
            $executionTime = round($endTime - $startTime, 2);

            $this->displaySummary($executionTime);

        } catch (Exception $e) {
=======
        
        $startTime = microtime(true);
        
        try {
            // Phase 1: Core System Data
            $this->populateSystemData();
            
            // Phase 2: Geographic Data  
            $this->populateGeographicData();
            
            // Phase 3: User Management
            $this->populateUserData();
            
            // Phase 4: Business Logic (SaluteOra)
            $this->populateBusinessData();
            
            // Phase 5: Content Management
            $this->populateContentData();
            
            $endTime = microtime(true);
            $executionTime = round($endTime - $startTime, 2);
            
            $this->displaySummary($executionTime);
            
        } catch (\Exception $e) {
>>>>>>> origin/develop
            echo "❌ Critical error: " . $e->getMessage() . "\n";
            echo "Stack trace: " . $e->getTraceAsString() . "\n";
        }
    }

    private function populateSystemData(): void
    {
        echo "📊 Phase 1: System Data\n";
        echo "=" . str_repeat("=", 50) . "\n";
<<<<<<< HEAD

        // Create basic system records using factories
        $this->createRecords('System Users', function() {
            return User::factory(10)->create();
        });

=======
        
        // Create basic system records using factories
        $this->createRecords('System Users', function() {
            return \Modules\User\Models\User::factory(10)->create();
        });
        
>>>>>>> origin/develop
        $this->createRecords('System Roles', function() {
            // Create basic roles
            $roles = ['admin', 'doctor', 'patient', 'staff'];
            $created = [];
            foreach ($roles as $role) {
<<<<<<< HEAD
                $created[] = Role::firstOrCreate(['name' => $role]);
            }
            return collect($created);
        });

=======
                $created[] = \Spatie\Permission\Models\Role::firstOrCreate(['name' => $role]);
            }
            return collect($created);
        });
        
>>>>>>> origin/develop
        $this->createRecords('System Permissions', function() {
            // Create basic permissions
            $permissions = [
                'view_patients', 'create_patients', 'edit_patients', 'delete_patients',
                'view_appointments', 'create_appointments', 'edit_appointments', 'delete_appointments',
                'view_reports', 'create_reports', 'edit_reports', 'delete_reports',
                'manage_studios', 'manage_users', 'manage_system'
            ];
            $created = [];
            foreach ($permissions as $permission) {
<<<<<<< HEAD
                $created[] = Permission::firstOrCreate(['name' => $permission]);
=======
                $created[] = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => $permission]);
>>>>>>> origin/develop
            }
            return collect($created);
        });
    }

    private function populateGeographicData(): void
    {
        echo "\n🌍 Phase 2: Geographic Data\n";
        echo "=" . str_repeat("=", 50) . "\n";
<<<<<<< HEAD

        // Create addresses using the working factory
        $this->createRecords('Addresses', function() {
            return Address::factory(200)->create();
        });

        $this->createRecords('Locations', function() {
            return Location::factory(100)->create();
=======
        
        // Create addresses using the working factory
        $this->createRecords('Addresses', function() {
            return \Modules\Geo\Models\Address::factory(200)->create();
        });
        
        $this->createRecords('Locations', function() {
            return \Modules\Geo\Models\Location::factory(100)->create();
>>>>>>> origin/develop
        });
    }

    private function populateUserData(): void
    {
        echo "\n👥 Phase 3: User Management\n";
        echo "=" . str_repeat("=", 50) . "\n";
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        // Create teams without problematic fields
        $this->createRecords('Teams', function() {
            $teams = [];
            $teamData = [
                ['name' => 'Sistema', 'description' => 'Team di sistema'],
                ['name' => 'Amministratori', 'description' => 'Team amministratori'],
                ['name' => 'Medici', 'description' => 'Team medici'],
                ['name' => 'Staff', 'description' => 'Team staff clinico'],
            ];
<<<<<<< HEAD

            foreach ($teamData as $data) {
                $teams[] = Team::firstOrCreate(
=======
            
            foreach ($teamData as $data) {
                $teams[] = \Modules\User\Models\Team::firstOrCreate(
>>>>>>> origin/develop
                    ['name' => $data['name']], 
                    $data
                );
            }
            return collect($teams);
        });
    }

    private function populateBusinessData(): void
    {
        echo "\n🏥 Phase 4: Business Logic (SaluteOra)\n";
        echo "=" . str_repeat("=", 50) . "\n";
<<<<<<< HEAD

        // Studios
        $this->createRecords('Studios', function() {
            return Studio::factory(25)->create();
        });

        // Patients with unique email handling
        $this->createRecords('Patients', function() {
            DB::statement('DELETE FROM users WHERE type = "patient"');
            return Patient::factory(500)->create();
        });

        // Doctors with unique email handling  
        $this->createRecords('Doctors', function() {
            DB::statement('DELETE FROM users WHERE type = "doctor"');
            return Doctor::factory(50)->create();
        });

        // Appointments
        $this->createRecords('Appointments', function() {
            return Appointment::factory(1000)->create();
        });

        // Reports
        $this->createRecords('Reports', function() {
            return Report::factory(300)->create();
        });

        // Profiles
        $this->createRecords('Profiles', function() {
            return Profile::factory(600)->create();
=======
        
        // Studios
        $this->createRecords('Studios', function() {
            return \Modules\SaluteOra\Models\Studio::factory(25)->create();
        });
        
        // Patients with unique email handling
        $this->createRecords('Patients', function() {
            DB::statement('DELETE FROM users WHERE type = "patient"');
            return \Modules\SaluteOra\Models\Patient::factory(500)->create();
        });
        
        // Doctors with unique email handling  
        $this->createRecords('Doctors', function() {
            DB::statement('DELETE FROM users WHERE type = "doctor"');
            return \Modules\SaluteOra\Models\Doctor::factory(50)->create();
        });
        
        // Appointments
        $this->createRecords('Appointments', function() {
            return \Modules\SaluteOra\Models\Appointment::factory(1000)->create();
        });
        
        // Reports
        $this->createRecords('Reports', function() {
            return \Modules\SaluteOra\Models\Report::factory(300)->create();
        });
        
        // Profiles
        $this->createRecords('Profiles', function() {
            return \Modules\SaluteOra\Models\Profile::factory(600)->create();
>>>>>>> origin/develop
        });
    }

    private function populateContentData(): void
    {
        echo "\n📄 Phase 5: Content Management\n";
        echo "=" . str_repeat("=", 50) . "\n";
<<<<<<< HEAD

        // Activity logs
        $this->createRecords('Activities', function() {
            return Activity::factory(2000)->create();
        });

=======
        
        // Activity logs
        $this->createRecords('Activities', function() {
            return \Modules\Activity\Models\Activity::factory(2000)->create();
        });
        
>>>>>>> origin/develop
        // Skip CMS for now due to schema issues
        echo "⚠️  Skipping CMS data due to schema incompatibilities\n";
    }

    private function createRecords(string $name, callable $factory): void
    {
        echo "  🔄 Creating {$name}... ";
<<<<<<< HEAD

        try {
            $records = $factory();
            $count = is_countable($records) ? count($records) : 0;

=======
        
        try {
            $records = $factory();
            $count = is_countable($records) ? count($records) : 0;
            
>>>>>>> origin/develop
            $this->results[$name] = [
                'status' => 'success',
                'count' => $count
            ];
            $this->totalRecords += $count;
<<<<<<< HEAD

            echo "✅ Created {$count} records\n";

        } catch (Exception $e) {
=======
            
            echo "✅ Created {$count} records\n";
            
        } catch (\Exception $e) {
>>>>>>> origin/develop
            $this->results[$name] = [
                'status' => 'error',
                'error' => $e->getMessage()
            ];
            echo "❌ Error: " . substr($e->getMessage(), 0, 100) . "...\n";
        }
    }

    private function displaySummary(float $executionTime): void
    {
        echo "\n📊 POPULATION SUMMARY\n";
        echo "=" . str_repeat("=", 60) . "\n";
<<<<<<< HEAD

        $successful = 0;
        $failed = 0;

=======
        
        $successful = 0;
        $failed = 0;
        
>>>>>>> origin/develop
        foreach ($this->results as $name => $result) {
            $status = match($result['status']) {
                'success' => '✅',
                default => '❌'
            };
<<<<<<< HEAD

            echo "{$status} {$name}";

=======
            
            echo "{$status} {$name}";
            
>>>>>>> origin/develop
            if ($result['status'] === 'success') {
                echo " - {$result['count']} records";
                $successful++;
            } else {
                echo " - Error";
                $failed++;
            }
            echo "\n";
        }
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        echo "\nTOTALS:\n";
        echo "✅ Successful: {$successful} categories\n";
        echo "❌ Failed: {$failed} categories\n";
        echo "📈 Total records created: {$this->totalRecords}\n";
        echo "⏱️  Execution time: {$executionTime} seconds\n";
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
        if ($this->totalRecords > 0) {
            echo "\n🎉 Database population completed successfully!\n";
            echo "💡 You can now test the application with realistic data.\n";
        }
    }
}

// Execute the population
$populator = new DatabasePopulator();
$populator->run();
