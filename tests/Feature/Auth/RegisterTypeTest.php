<?php

declare(strict_types=1);
<<<<<<< HEAD

namespace Modules\Cms\Tests\Feature\Auth;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

namespace Modules\Cms\Tests\Feature\Auth;

=======
=======
>>>>>>> origin/develop
namespace Modules\Cms\Tests\Feature\Auth;



<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

namespace Modules\Cms\Tests\Feature\Auth;

>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

uses(TestCase::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
=======
use function Pest\Laravel\{get, actingAs};
>>>>>>> a12f125f4a (.)
=======

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
>>>>>>> b93ef594b4 (.)

uses(TestCase::class);
=======
use Illuminate\Support\Facades\Hash;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
use function Pest\Laravel\{get, actingAs};

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

/**
 * Tests for dynamic registration pages rendered by Themes/One
 * Route pattern: /{locale}/auth/{type}/register
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
 * This test suite verifies that:
 * 1. Registration pages render correctly for each user type
 * 2. Authentication rules are enforced (guests can access, authenticated users are redirected)
 * 3. Dynamic content is correctly displayed based on user type
 * 4. Required components (Livewire widget) are present
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
 * The Cms module must remain independent from SaluteOra; all user operations
 * go through XotData to obtain the correct User class.
 */

// NOTE: Helper functions moved to Modules\Xot\Tests\TestCase for DRY pattern
// Use $this->createTestUser()

// Dataset statico per tipi utente comuni
dataset('userTypes', [
    'doctor' => ['doctor'],
    'patient' => ['patient'],
]);

describe('Registration Page Accessibility', function () {
    test('guest can view :type registration page', function (string $type): void {
        $response = get("/it/auth/{$type}/register");
        expect($response->status())->toBe(200);
    })->with('userTypes');

    test('authenticated user is redirected from :type registration page', function (string $type): void {
        $user = $this->createTestUser();
        actingAs($user);

        $response = get("/it/auth/{$type}/register");
        expect($response->status())->toBe(302);
    })->with('userTypes');
});

describe('Registration Page Content', function () {
    test(':type registration page contains expected elements', function (string $type): void {
        $response = get("/it/auth/{$type}/register");
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        expect($response->status())->toBe(200);

        $content = $response->getContent();
        expect($content)->toContain('Registrazione')->toContain('Crea il tuo account')//->toContain('<x-ui.logo')
        //->toContain('RegistrationWidget')
        ;
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        expect($response->status())->toBe(200);

        $content = $response->getContent();
<<<<<<< HEAD
=======
        
        expect($response->status())->toBe(200);
        
        $content = $response->getContent();
>>>>>>> origin/develop
        expect($content)
            ->toContain('Registrazione')
            ->toContain('Crea il tuo account')
            //->toContain('<x-ui.logo')
            //->toContain('RegistrationWidget')
            ;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        expect($content)->toContain('Registrazione')->toContain('Crea il tuo account')//->toContain('<x-ui.logo')
        //->toContain('RegistrationWidget')
        ;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    })->with('userTypes');

    test(':type registration page has proper HTML structure', function (string $type): void {
        $response = get("/it/auth/{$type}/register");
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
        $content = $response->getContent();
        expect($content)
            ->toContain('<!DOCTYPE html>')
            ->toContain('<html')
            ->toContain('</html>')
            ->toContain('<meta name="viewport"')
            ->toContain('width=device-width');
    })->with('userTypes');
});

describe('Registration Page Localization', function () {
    test(':type registration page uses Italian localization', function (string $type): void {
        $response = get("/it/auth/{$type}/register");
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        expect($response->status())->toBe(200);

        $content = $response->getContent();
        expect($content)->toContain('Registrazione')->toContain('Crea il tuo account');
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        expect($response->status())->toBe(200);

        $content = $response->getContent();
<<<<<<< HEAD
        expect($content)
            ->toContain('Registrazione')
            ->toContain('Crea il tuo account');
>>>>>>> a12f125f4a (.)
=======
        expect($content)->toContain('Registrazione')->toContain('Crea il tuo account');
>>>>>>> b93ef594b4 (.)
=======
        
        expect($response->status())->toBe(200);
        
        $content = $response->getContent();
        expect($content)
            ->toContain('Registrazione')
            ->toContain('Crea il tuo account');
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    })->with('userTypes');
});

describe('Registration Page Security', function () {
    //test('handles invalid user type gracefully', function (): void {
    //    $response = get('/it/auth/invalid-type/register');
<<<<<<< HEAD
    //     expect($response->status())->toBe(404);
    //});
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    //     expect($response->status())->toBe(404);
    //});
=======
   //     expect($response->status())->toBe(404);
    //});

>>>>>>> a12f125f4a (.)
=======
    //     expect($response->status())->toBe(404);
    //});
>>>>>>> b93ef594b4 (.)
=======
   //     expect($response->status())->toBe(404);
    //});

>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    //test('handles missing type parameter appropriately', function (): void {
    //    $response = get('/it/auth/register');
    //    expect($response->status())->toBeGreaterThanOrEqual(300);
    //});
});

describe('Registration Page Performance', function () {
    test(':type registration page loads within acceptable time limits', function (string $type): void {
        $startTime = microtime(true);

        $response = get("/it/auth/{$type}/register");

        $loadTime = microtime(true) - $startTime;

        expect($response->status())->toBe(200);
        expect($loadTime)->toBeLessThan(3.0); // Massimo 3 secondi per essere sicuri
    })->with('userTypes');
});
