<?php

<<<<<<< HEAD
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Studio;
use Modules\SaluteOra\Models\Appointment;
use Modules\SaluteOra\Models\Report;
use Modules\SaluteOra\Models\Profile;
use Modules\SaluteOra\Models\User;

=======
>>>>>>> origin/develop
/**
 * Tinker commands to generate 100 records for each business model
 * Run with: php artisan tinker < tinker_commands.php
 */

// Module: SaluteOra
echo "Generating Patient...";
<<<<<<< HEAD
Patient::factory()->count(100)->create();
echo "✅ Patient completed\n";

echo "Generating Doctor...";
Doctor::factory()->count(100)->create();
echo "✅ Doctor completed\n";

echo "Generating Studio...";
Studio::factory()->count(100)->create();
echo "✅ Studio completed\n";

echo "Generating Appointment...";
Appointment::factory()->count(100)->create();
echo "✅ Appointment completed\n";

echo "Generating Report...";
Report::factory()->count(100)->create();
echo "✅ Report completed\n";

echo "Generating Profile...";
Profile::factory()->count(100)->create();
echo "✅ Profile completed\n";

echo "Generating User...";
User::factory()->count(100)->create();
=======
\Modules\SaluteOra\Models\Patient::factory()->count(100)->create();
echo "✅ Patient completed\n";

echo "Generating Doctor...";
\Modules\SaluteOra\Models\Doctor::factory()->count(100)->create();
echo "✅ Doctor completed\n";

echo "Generating Studio...";
\Modules\SaluteOra\Models\Studio::factory()->count(100)->create();
echo "✅ Studio completed\n";

echo "Generating Appointment...";
\Modules\SaluteOra\Models\Appointment::factory()->count(100)->create();
echo "✅ Appointment completed\n";

echo "Generating Report...";
\Modules\SaluteOra\Models\Report::factory()->count(100)->create();
echo "✅ Report completed\n";

echo "Generating Profile...";
\Modules\SaluteOra\Models\Profile::factory()->count(100)->create();
echo "✅ Profile completed\n";

echo "Generating User...";
\Modules\SaluteOra\Models\User::factory()->count(100)->create();
>>>>>>> origin/develop
echo "✅ User completed\n";

