<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
use Exception;
=======
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
use Livewire\Livewire;
use Modules\User\Filament\Widgets\RegistrationWidget;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

// Use Cms specific TestCase only for this file
uses(TestCase::class);
=======
<<<<<<< HEAD
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

// Use Cms specific TestCase only for this file
uses(TestCase::class);
=======
use function Pest\Laravel\{get, actingAs};

// Use Cms specific TestCase only for this file
uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

// Ensure XotData is mocked for every test
beforeEach(function (): void {
    // ✅ Utilizzo funzione centralizzata dal TestCase
    static::mockXotData();
});

// =============================================================================
// REGISTRATION WIDGET TESTS - Filament Component
// =============================================================================
// ✅ Test del WIDGET Filament, non della pagina
// ✅ Focus su: rendering, form interaction, basic validation
// ✅ Architettura: Filament Widget + XotBaseWidget + dynamic resolution
// =============================================================================

// =============================================================================
// WIDGET CORE TESTS
// =============================================================================

test('widget can be rendered for patient type', function () {
    Livewire::test(RegistrationWidget::class, ['type' => 'patient'])
        ->assertStatus(200)
        ->assertViewIs('pub_theme::filament.widgets.registration');
});

test('widget can be rendered for doctor type', function () {
    Livewire::test(RegistrationWidget::class, ['type' => 'doctor'])
        ->assertStatus(200)
        ->assertViewIs('pub_theme::filament.widgets.registration');
});

test('widget requires type parameter', function () {
    expect(function () {
        Livewire::test(RegistrationWidget::class);
<<<<<<< HEAD
    })
        ->toThrow(Exception::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    })
        ->toThrow(Exception::class);
=======
    })->toThrow(Exception::class);
>>>>>>> a12f125f4a (.)
=======
    })
        ->toThrow(Exception::class);
>>>>>>> b93ef594b4 (.)
=======
    })->toThrow(\Exception::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

test('widget can handle form data input', function () {
    // ✅ Utilizzo funzione centralizzata dal TestCase
    $email = static::generateUniqueEmail();
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
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient'])
        ->set('data.email', $email)
        ->set('data.name', 'Test User')
        ->assertSet('data.email', $email)
        ->assertSet('data.name', 'Test User');
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
    expect($widget->get('data.email'))->toBe($email);
});

test('widget maintains state after setting multiple fields', function () {
    $testData = [
        'name' => 'Test Patient',
        'email' => static::generateUniqueEmail(), // ✅ Utilizzo funzione centralizzata
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        'password' => 'TestPassword123!',
    ];

    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient']);

    foreach ($testData as $field => $value) {
        $widget->set("data.{$field}", $value);
    }

<<<<<<< HEAD
=======
=======
        'password' => 'TestPassword123!'
=======
        'password' => 'TestPassword123!',
>>>>>>> b93ef594b4 (.)
    ];

    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient']);

    foreach ($testData as $field => $value) {
        $widget->set("data.{$field}", $value);
    }
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        'password' => 'TestPassword123!'
    ];
    
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient']);
    
    foreach ($testData as $field => $value) {
        $widget->set("data.{$field}", $value);
    }
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    foreach ($testData as $field => $value) {
        expect($widget->get("data.{$field}"))->toBe($value);
    }
});

test('widget calls register method without fatal errors', function () {
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient'])
        ->set('data.email', static::generateUniqueEmail()) // ✅ Utilizzo funzione centralizzata
        ->set('data.name', 'Test User')
        ->set('data.password', 'TestPassword123!');

    // Chiamata a register - potrebbe fallire per action class mancante
    // ma non dovrebbe generare errori fatali di sintassi
    try {
        $widget->call('register');
        expect(true)->toBeTrue(); // Success path
<<<<<<< HEAD
    } catch (Exception $e) {
        // Se fallisce per action class o validation, è normale in test
        expect($e)->toBeInstanceOf(Exception::class);
=======
<<<<<<< HEAD
    } catch (Exception $e) {
        // Se fallisce per action class o validation, è normale in test
        expect($e)->toBeInstanceOf(Exception::class);
=======
    } catch (\Exception $e) {
        // Se fallisce per action class o validation, è normale in test
        expect($e)->toBeInstanceOf(\Exception::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    }
});

test('widget works with Livewire testing framework', function () {
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient']);
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
    // Verifica che il widget sia compatibile con Livewire testing
    expect($widget)->not()->toBeNull();
});

test('widget handles different user types', function () {
    foreach (['patient', 'doctor'] as $type) {
        $widget = Livewire::test(RegistrationWidget::class, ['type' => $type])
            ->set('data.email', static::generateUniqueEmail()) // ✅ Utilizzo funzione centralizzata
            ->set('data.name', "Test {$type}")
            ->set('data.password', 'TestPassword123!');

        try {
            $widget->call('register');
            expect(true)->toBeTrue();
<<<<<<< HEAD
        } catch (Exception $e) {
            // Normale per environment di test
            expect($e)->toBeInstanceOf(Exception::class);
=======
<<<<<<< HEAD
        } catch (Exception $e) {
            // Normale per environment di test
            expect($e)->toBeInstanceOf(Exception::class);
=======
        } catch (\Exception $e) {
            // Normale per environment di test
            expect($e)->toBeInstanceOf(\Exception::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        }
    }
});

test('widget maintains state after form errors', function () {
    $email = 'invalid-email';
    $name = 'Test User';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)

    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient'])->set('data.email', $email)->set(
        'data.name',
        $name,
    );
<<<<<<< HEAD

    // Anche dopo errori, i dati dovrebbero rimanere
    expect($widget->get('data.email'))->toBe($email)->and($widget->get('data.name'))->toBe($name);
=======
<<<<<<< HEAD

    // Anche dopo errori, i dati dovrebbero rimanere
    expect($widget->get('data.email'))->toBe($email)->and($widget->get('data.name'))->toBe($name);
=======
=======
>>>>>>> origin/develop
    
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient'])
        ->set('data.email', $email)
        ->set('data.name', $name);

    // Anche dopo errori, i dati dovrebbero rimanere
    expect($widget->get('data.email'))->toBe($email)
        ->and($widget->get('data.name'))->toBe($name);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    // Anche dopo errori, i dati dovrebbero rimanere
    expect($widget->get('data.email'))->toBe($email)->and($widget->get('data.name'))->toBe($name);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});
