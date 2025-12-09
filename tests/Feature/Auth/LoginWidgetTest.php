<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
=======
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Modules\User\Filament\Widgets\LoginWidget;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD

use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertGuest;

uses(TestCase::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertGuest;
=======
use function Pest\Laravel\{assertGuest, assertAuthenticated};
>>>>>>> a12f125f4a (.)
=======

use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertGuest;
>>>>>>> b93ef594b4 (.)

uses(TestCase::class);
=======
use function Pest\Laravel\{assertGuest, assertAuthenticated};

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

// =============================================================================
// LOGIN WIDGET TESTS - Filament Component
// =============================================================================
// ✅ Test del WIDGET Filament, non della pagina
// ✅ Focus su: rendering, form interaction, authentication logic
// ✅ Architettura: Filament Widget + XotData + dynamic resolution
// =============================================================================

// =============================================================================
// WIDGET STRUCTURE TESTS
// =============================================================================

test('widget can be rendered', function (): void {
    $component = Livewire::test(LoginWidget::class);
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    $component->assertStatus(200);
});

test('widget has correct view', function (): void {
    expect(LoginWidget::getView())->toBe('user::filament.widgets.login');
});

test('widget initializes correctly', function (): void {
    $component = Livewire::test(LoginWidget::class);
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    // Widget dovrebbe inizializzare la proprietà data
    $component->assertSet('data', []);
});

// =============================================================================
// WIDGET DATA BINDING TESTS
// =============================================================================

test('can set form data', function (): void {
    $component = Livewire::test(LoginWidget::class);
<<<<<<< HEAD

    // Set form data
=======
<<<<<<< HEAD

    // Set form data
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
    $component->set('data.email', 'test@example.com')->set('data.password', 'password123');

    // Verifica che i dati siano stati impostati
    $component->assertSet('data.email', 'test@example.com')->assertSet('data.password', 'password123');
<<<<<<< HEAD
=======
=======
    $component->set('data.email', 'test@example.com')
              ->set('data.password', 'password123');

    // Verifica che i dati siano stati impostati
    $component->assertSet('data.email', 'test@example.com')
              ->assertSet('data.password', 'password123');
>>>>>>> a12f125f4a (.)
=======
    $component->set('data.email', 'test@example.com')->set('data.password', 'password123');

    // Verifica che i dati siano stati impostati
    $component->assertSet('data.email', 'test@example.com')->assertSet('data.password', 'password123');
>>>>>>> b93ef594b4 (.)
=======
    
    // Set form data
    $component->set('data.email', 'test@example.com')
              ->set('data.password', 'password123');
    
    // Verifica che i dati siano stati impostati
    $component->assertSet('data.email', 'test@example.com')
              ->assertSet('data.password', 'password123');
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

// =============================================================================
// WIDGET AUTHENTICATION LOGIC TESTS
// =============================================================================

test('authenticates user with valid credentials', function (): void {
    // ✅ Utilizzo funzione centralizzata dal TestCase
    $email = static::generateUniqueEmail();
    $user = static::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    assertGuest();

    $component = Livewire::test(LoginWidget::class);

<<<<<<< HEAD
    $component->set('data.email', $email)->set('data.password', 'password123')->call('save');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $component->set('data.email', $email)->set('data.password', 'password123')->call('save');
=======
    $component->set('data.email', $email)
              ->set('data.password', 'password123')
              ->call('save');
>>>>>>> a12f125f4a (.)
=======
    $component->set('data.email', $email)->set('data.password', 'password123')->call('save');
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)

    // Verifica che l'utente sia autenticato
    assertAuthenticated();

    // Verifica che sia l'utente corretto
    $authenticatedUser = Auth::user();
    expect($authenticatedUser)->not->toBeNull();
<<<<<<< HEAD
    expect($authenticatedUser?->email)->toBe($email);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    expect($authenticatedUser?->email)->toBe($email);
=======
    expect($authenticatedUser->email)->toBe($email);
>>>>>>> a12f125f4a (.)
=======
    expect($authenticatedUser?->email)->toBe($email);
>>>>>>> b93ef594b4 (.)
=======
    
    assertGuest();
    
    $component = Livewire::test(LoginWidget::class);
    
    $component->set('data.email', $email)
              ->set('data.password', 'password123')
              ->call('save');
    
    // Verifica che l'utente sia autenticato
    assertAuthenticated();
    
    // Verifica che sia l'utente corretto
    $authenticatedUser = Auth::user();
    expect($authenticatedUser)->not->toBeNull();
    expect($authenticatedUser->email)->toBe($email);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

test('handles invalid credentials gracefully', function (): void {
    // ✅ Utilizzo funzioni centralizzate dal TestCase
    $email = static::generateUniqueEmail();
    static::createTestUser([
        'email' => $email,
        'password' => Hash::make('correct_password'),
    ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    assertGuest();

    $component = Livewire::test(LoginWidget::class);

    // Tenta login con password sbagliata
<<<<<<< HEAD
    $component->set('data.email', $email)->set('data.password', 'wrong_password')->call('save');

=======
<<<<<<< HEAD
<<<<<<< HEAD
    $component->set('data.email', $email)->set('data.password', 'wrong_password')->call('save');
=======
    $component->set('data.email', $email)
              ->set('data.password', 'wrong_password')
              ->call('save');
>>>>>>> a12f125f4a (.)
=======
    $component->set('data.email', $email)->set('data.password', 'wrong_password')->call('save');
>>>>>>> b93ef594b4 (.)

=======
    
    assertGuest();
    
    $component = Livewire::test(LoginWidget::class);
    
    // Tenta login con password sbagliata
    $component->set('data.email', $email)
              ->set('data.password', 'wrong_password')
              ->call('save');
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    // L'utente dovrebbe rimanere guest
    assertGuest();
});

// =============================================================================
// WIDGET XOTDATA INTEGRATION TESTS
// =============================================================================

test('authentication works regardless of user type', function (): void {
    // ✅ Utilizzo funzioni centralizzate dal TestCase
    $email = static::generateUniqueEmail();
    $user = static::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    assertGuest();

    $component = Livewire::test(LoginWidget::class);

<<<<<<< HEAD
    $component->set('data.email', $email)->set('data.password', 'password123')->call('save');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $component->set('data.email', $email)->set('data.password', 'password123')->call('save');
=======
    $component->set('data.email', $email)
              ->set('data.password', 'password123')
              ->call('save');
>>>>>>> a12f125f4a (.)
=======
    $component->set('data.email', $email)->set('data.password', 'password123')->call('save');
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)

    assertAuthenticated();

    // Verifica che l'utente autenticato sia del tipo corretto
    $authenticatedUser = Auth::user();
    expect($authenticatedUser)->toBeInstanceOf(static::getUserClass());
<<<<<<< HEAD
    expect($authenticatedUser?->email)->toBe($email);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    expect($authenticatedUser?->email)->toBe($email);
=======
    expect($authenticatedUser->email)->toBe($email);
>>>>>>> a12f125f4a (.)
=======
    expect($authenticatedUser?->email)->toBe($email);
>>>>>>> b93ef594b4 (.)
=======
    
    assertGuest();
    
    $component = Livewire::test(LoginWidget::class);
    
    $component->set('data.email', $email)
              ->set('data.password', 'password123')
              ->call('save');
    
    assertAuthenticated();
    
    // Verifica che l'utente autenticato sia del tipo corretto
    $authenticatedUser = Auth::user();
    expect($authenticatedUser)->toBeInstanceOf(static::getUserClass());
    expect($authenticatedUser->email)->toBe($email);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

test('getUserClass returns valid class', function (): void {
    // ✅ Utilizzo funzione centralizzata dal TestCase
    $userClass = static::getUserClass();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    expect($userClass)->toBeString();
    expect(class_exists($userClass))->toBeTrue();

<<<<<<< HEAD
=======
=======
    
    expect($userClass)->toBeString();
    expect(class_exists($userClass))->toBeTrue();
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    // Verifica che il class implementi UserContract
    $interfaces = class_implements($userClass);
    expect($interfaces)->toContain(UserContract::class);
});

test('createTestUser creates valid instances', function (): void {
    // ✅ Utilizzo funzione centralizzata dal TestCase
    $user = static::createTestUser();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    // Verifica proprietà richieste per autenticazione
    expect($user->email)->toBeString();
    expect($user->password)->toBeString();

<<<<<<< HEAD
=======
=======
    
    // Verifica proprietà richieste per autenticazione
    expect($user->email)->toBeString();
    expect($user->password)->toBeString();
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    // Verifica che l'utente sia nel database
    $userClass = static::getUserClass();
    $foundUser = $userClass::where('email', $user->email)->first();
    expect($foundUser)->not->toBeNull();
    expect($foundUser->email)->toBe($user->email);
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
});
=======
});
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
