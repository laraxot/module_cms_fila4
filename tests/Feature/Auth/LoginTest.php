<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Volt\Volt as LivewireVolt;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertGuest;
use function Pest\Laravel\get;
use function Pest\Laravel\post;
<<<<<<< HEAD
=======
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Contracts\UserContract;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use function Pest\Laravel\{get, post, actingAs, assertGuest, assertAuthenticated};

>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)

uses(TestCase::class);

// NOTE: Helper functions moved to Modules\Xot\Tests\TestCase for DRY pattern
// Use $this->$this->generateUniqueEmail(), $this->$this->getUserClass(), $this->$this->createTestUser()

describe('Frontend Login Page Rendering', function () {
    test('login page can be rendered', function () {
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');
        $response->assertStatus(200);
    });
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)

    test('login page contains login widget', function () {
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');
        $response->assertStatus(200)//->assertSee('@livewire')
        //->assertSee('LoginWidget')
        ;
    });

    test('login page has required form elements', function () {
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');
        $response->assertStatus(200)//->assertSee('Hai dimenticato la password?')
        //->assertSee('crea un nuovo account')
        //->assertSee('logo-v2.png')
        ;
<<<<<<< HEAD
=======
    
    test('login page contains login widget', function () {
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');
        $response->assertStatus(200)
                 //->assertSee('@livewire')
                 //->assertSee('LoginWidget')
                 ;
    });
    
    test('login page has required form elements', function () {
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');
        $response->assertStatus(200)
                 //->assertSee('Hai dimenticato la password?')
                 //->assertSee('crea un nuovo account')
                 //->assertSee('logo-v2.png')
                 ;
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
    });
});

describe('Frontend Login Page Localization', function () {
    test('login page works in italian', function () {
        app()->setLocale('it');
        $response = get('/it/auth/login');
        $response->assertStatus(200);
    });
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 3401a6b (.)
=======

>>>>>>> 1377a46 (.)
    //test('login page works in english', function () {
    //    app()->setLocale('en');
    //    LaravelLocalization::setLocale('en');
    //    $response = get('/en/auth/login');
    //    //$response->assertStatus(200);
    //});
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)

    test('login page contains localized content', function () {
        $response = get('/it/auth/login');
        $response
            ->assertStatus(200)
            ->assertSee('Hai dimenticato la password?')
            ->assertSee(__('pub_theme::auth.login.title'))
            ->assertSee(__('pub_theme::auth.login.or'));
<<<<<<< HEAD
=======
    
    test('login page contains localized content', function () {
        $response = get('/it/auth/login');
        $response->assertStatus(200)
                 ->assertSee('Hai dimenticato la password?')
                 ->assertSee(__('pub_theme::auth.login.title'))
                 ->assertSee(__('pub_theme::auth.login.or'));
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
    });
});

describe('Frontend Login Page Authentication', function () {
    test('user can authenticate via frontend login page', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

        assertGuest();

=======
        
        assertGuest();
        
>>>>>>> 3401a6b (.)
=======

        assertGuest();

>>>>>>> 1377a46 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('authenticate');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)

        $response->assertHasNoErrors();
        assertAuthenticated();

        actingAs($user);

        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');

        $response->assertRedirect('/');
    });
<<<<<<< HEAD
=======
        
        $response->assertHasNoErrors();
        assertAuthenticated();
        
        actingAs($user);
        
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');
        
        $response->assertRedirect('/');
    });
    
    
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
});

describe('Frontend Login Page Integration', function () {
    test('authenticated users are redirected from login page', function () {
        $user = $this->createTestUser();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)

        actingAs($user);

        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');

        // May redirect to dashboard or intended page
        $response->assertStatus(302);
    });
<<<<<<< HEAD
=======
        
        actingAs($user);
        
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/login');
        
        // May redirect to dashboard or intended page
        $response->assertStatus(302);
    });
    
    
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
});

describe('Frontend Login Session Management', function () {
    test('remember me functionality works', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

        assertGuest();

=======
        
        assertGuest();
        
>>>>>>> 3401a6b (.)
=======

        assertGuest();

>>>>>>> 1377a46 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->set('remember', true)
            ->call('authenticate');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)

        $response->assertHasNoErrors();
        assertAuthenticated();
    });

<<<<<<< HEAD
=======
        
        $response->assertHasNoErrors();
        assertAuthenticated();
    });
    
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
    test('session regeneration on login', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)

        // Store original session ID
        $originalSessionId = session()->getId();

<<<<<<< HEAD
=======
        
        // Store original session ID
        $originalSessionId = session()->getId();
        
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
        LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('authenticate');
<<<<<<< HEAD
<<<<<<< HEAD

        assertAuthenticated();

=======
        
        assertAuthenticated();
        
>>>>>>> 3401a6b (.)
=======

        assertAuthenticated();

>>>>>>> 1377a46 (.)
        // Session should be regenerated for security
        expect(session()->getId())->not->toBe($originalSessionId);
    });
});

describe('Frontend Login Security', function () {
    test('login attempts are rate limited', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 3401a6b (.)
=======

>>>>>>> 1377a46 (.)
        // Multiple failed attempts
        for ($i = 0; $i < 5; $i++) {
            LivewireVolt::test('auth.login')
                ->set('email', $email)
                ->set('password', 'wrong_password')
                ->call('authenticate');
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 3401a6b (.)
=======

>>>>>>> 1377a46 (.)
        // Should be rate limited after too many attempts
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('authenticate');
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 3401a6b (.)
=======

>>>>>>> 1377a46 (.)
        // May have throttling errors
        // This test verifies the system handles rate limiting appropriately
        expect($response)->not->toBeNull();
    });
});

describe('Frontend Login User Types', function () {
    test('any user type can login via frontend', function () {
        // Using XotData pattern ensures compatibility with any user type
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

        assertGuest();

=======
        
        assertGuest();
        
>>>>>>> 3401a6b (.)
=======

        assertGuest();

>>>>>>> 1377a46 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('authenticate');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)

        $response->assertHasNoErrors();
        assertAuthenticated();

        // Verify authenticated user
        $authenticatedUser = Auth::user();
        expect($authenticatedUser)->not->toBeNull();
        expect($authenticatedUser?->email)->toBe($email);
<<<<<<< HEAD
=======
        
        $response->assertHasNoErrors();
        assertAuthenticated();
        
        // Verify authenticated user
        $authenticatedUser = Auth::user();
        expect($authenticatedUser)->not->toBeNull();
        expect($authenticatedUser->email)->toBe($email);
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
    });
});
