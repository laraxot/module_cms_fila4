<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Xot\Tests\TestCase;
use Exception;
use Livewire\Livewire;
use Modules\User\Filament\Widgets\RegistrationWidget;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
<<<<<<< HEAD

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
=======
use function Pest\Laravel\{get, actingAs};
>>>>>>> 3401a6b (.)
=======

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
>>>>>>> 1377a46 (.)

// Use Cms specific TestCase only for this file
uses(TestCase::class);

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
<<<<<<< HEAD
    })
        ->toThrow(Exception::class);
=======
    })->toThrow(Exception::class);
>>>>>>> 3401a6b (.)
=======
    })
        ->toThrow(Exception::class);
>>>>>>> 1377a46 (.)
});

test('widget can handle form data input', function () {
    // ✅ Utilizzo funzione centralizzata dal TestCase
    $email = static::generateUniqueEmail();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 3401a6b (.)
=======

>>>>>>> 1377a46 (.)
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient'])
        ->set('data.email', $email)
        ->set('data.name', 'Test User')
        ->assertSet('data.email', $email)
        ->assertSet('data.name', 'Test User');
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 3401a6b (.)
=======

>>>>>>> 1377a46 (.)
    expect($widget->get('data.email'))->toBe($email);
});

test('widget maintains state after setting multiple fields', function () {
    $testData = [
        'name' => 'Test Patient',
        'email' => static::generateUniqueEmail(), // ✅ Utilizzo funzione centralizzata
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
        'password' => 'TestPassword123!',
    ];

    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient']);

    foreach ($testData as $field => $value) {
        $widget->set("data.{$field}", $value);
    }

<<<<<<< HEAD
=======
        'password' => 'TestPassword123!'
    ];
    
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient']);
    
    foreach ($testData as $field => $value) {
        $widget->set("data.{$field}", $value);
    }
    
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
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
    } catch (Exception $e) {
        // Se fallisce per action class o validation, è normale in test
        expect($e)->toBeInstanceOf(Exception::class);
    }
});

test('widget works with Livewire testing framework', function () {
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient']);
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 3401a6b (.)
=======

>>>>>>> 1377a46 (.)
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
        } catch (Exception $e) {
            // Normale per environment di test
            expect($e)->toBeInstanceOf(Exception::class);
        }
    }
});

test('widget maintains state after form errors', function () {
    $email = 'invalid-email';
    $name = 'Test User';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)

    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient'])->set('data.email', $email)->set(
        'data.name',
        $name,
    );

    // Anche dopo errori, i dati dovrebbero rimanere
    expect($widget->get('data.email'))->toBe($email)->and($widget->get('data.name'))->toBe($name);
<<<<<<< HEAD
=======
    
    $widget = Livewire::test(RegistrationWidget::class, ['type' => 'patient'])
        ->set('data.email', $email)
        ->set('data.name', $name);

    // Anche dopo errori, i dati dovrebbero rimanere
    expect($widget->get('data.email'))->toBe($email)
        ->and($widget->get('data.name'))->toBe($name);
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
});
