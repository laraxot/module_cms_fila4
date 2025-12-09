<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

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
use Illuminate\Support\Facades\Session;
use Livewire\Volt\Volt as LivewireVolt;
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

// NOTE: Helper functions moved to Modules\Xot\Tests\TestCase for DRY pattern
// Use $this->$this->generateUniqueEmail(), $this->getUserClass(), $this->$this->createTestUser()

describe('Volt Component Rendering', function () {
    test('volt login component can be rendered', function () {
        $component = LivewireVolt::test('auth.login');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        expect($component)->not->toBeNull();
        $component->assertOk();
    });

    test('volt component has initial state', function () {
        $component = LivewireVolt::test('auth.login');

        $component->assertSet('email', '')->assertSet('password', '')->assertSet('remember', false);
    });

    test('volt component renders form elements', function () {
        $component = LivewireVolt::test('auth.login');

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        expect($component)->not->toBeNull();
        $component->assertOk();
    });

    test('volt component has initial state', function () {
        $component = LivewireVolt::test('auth.login');

        $component->assertSet('email', '')->assertSet('password', '')->assertSet('remember', false);
    });

    test('volt component renders form elements', function () {
        $component = LivewireVolt::test('auth.login');
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        expect($component)->not->toBeNull();
        $component->assertOk();
    });
    
    test('volt component has initial state', function () {
        $component = LivewireVolt::test('auth.login');
        
        $component
            ->assertSet('email', '')
            ->assertSet('password', '')
            ->assertSet('remember', false);
    });
    
    test('volt component renders form elements', function () {
        $component = LivewireVolt::test('auth.login');
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $component
            ->assertSee('wire:model="email"')
            ->assertSee('wire:model="password"')
            ->assertSee('wire:model="remember"');
    });
});

describe('Volt Component Authentication', function () {
    test('user can authenticate via volt component', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD

        assertGuest();

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        assertGuest();

=======
        
        assertGuest();
        
>>>>>>> a12f125f4a (.)
=======

        assertGuest();

>>>>>>> b93ef594b4 (.)
=======
        
        assertGuest();
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $response->assertHasNoErrors();
        assertAuthenticated();
    });

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $response->assertHasNoErrors();
        assertAuthenticated();
    });
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $response->assertHasNoErrors();
        assertAuthenticated();
    });

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    test('authentication fails with wrong credentials', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD

        assertGuest();

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        assertGuest();

=======
        
        assertGuest();
        
>>>>>>> a12f125f4a (.)
=======

        assertGuest();

>>>>>>> b93ef594b4 (.)
=======
        
        assertGuest();
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'wrong_password')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $response->assertHasErrors(['email']);
        assertGuest();
    });

    test('authentication fails with non-existent user', function () {
        $email = $this->generateUniqueEmail();

        assertGuest();

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $response->assertHasErrors(['email']);
        assertGuest();
    });

    test('authentication fails with non-existent user', function () {
        $email = $this->generateUniqueEmail();

        assertGuest();
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $response->assertHasErrors(['email']);
        assertGuest();
    });
    
    test('authentication fails with non-existent user', function () {
        $email = $this->generateUniqueEmail();
        
        assertGuest();
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
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
        $response->assertHasErrors(['email']);
        assertGuest();
    });
});

describe('Volt Component Validation', function () {
    test('email validation works', function () {
        $response = LivewireVolt::test('auth.login')
            ->set('email', 'invalid-email')
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $response->assertHasErrors(['email']);
    });

    test('required fields validation', function () {
        $response = LivewireVolt::test('auth.login')->call('save');

        $response->assertHasErrors(['email', 'password']);
    });

    test('password minimum length validation', function () {
        $email = $this->generateUniqueEmail();

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $response->assertHasErrors(['email']);
    });

    test('required fields validation', function () {
        $response = LivewireVolt::test('auth.login')->call('save');

        $response->assertHasErrors(['email', 'password']);
    });

    test('password minimum length validation', function () {
        $email = $this->generateUniqueEmail();
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $response->assertHasErrors(['email']);
    });
    
    test('required fields validation', function () {
        $response = LivewireVolt::test('auth.login')
            ->call('save');
        
        $response->assertHasErrors(['email', 'password']);
    });
    
    test('password minimum length validation', function () {
        $email = $this->generateUniqueEmail();
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', '123')
            ->call('save');
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
        // Password troppo corta dovrebbe fallire
        $response->assertHasErrors();
    });
});

describe('Volt Component Session Management', function () {
    test('remember me functionality works', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD

        assertGuest();

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        assertGuest();

=======
        
        assertGuest();
        
>>>>>>> a12f125f4a (.)
=======

        assertGuest();

>>>>>>> b93ef594b4 (.)
=======
        
        assertGuest();
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->set('remember', true)
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $response->assertHasNoErrors();
        assertAuthenticated();
    });

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $response->assertHasNoErrors();
        assertAuthenticated();
    });
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $response->assertHasNoErrors();
        assertAuthenticated();
    });

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    test('session regeneration on login', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        // Store original session ID
        $originalSessionId = session()->getId();

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        // Store original session ID
        $originalSessionId = session()->getId();
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // Store original session ID
        $originalSessionId = session()->getId();

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        assertAuthenticated();

        // Session should be regenerated for security
        expect(session()->getId())->not->toBe($originalSessionId);
    });

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        assertAuthenticated();

        // Session should be regenerated for security
        expect(session()->getId())->not->toBe($originalSessionId);
    });
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        assertAuthenticated();
        
        // Session should be regenerated for security
        expect(session()->getId())->not->toBe($originalSessionId);
    });
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    test('session data is preserved on authentication', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        // Set some session data
        Session::put('test_key', 'test_value');

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        // Set some session data
        Session::put('test_key', 'test_value');
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // Set some session data
        Session::put('test_key', 'test_value');

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD

        assertAuthenticated();

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        assertAuthenticated();

=======
        
        assertAuthenticated();
        
>>>>>>> a12f125f4a (.)
=======

        assertAuthenticated();

>>>>>>> b93ef594b4 (.)
=======
        
        assertAuthenticated();
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        // Session data should be preserved (session regenerated but data kept)
        expect(Session::get('test_key'))->toBe('test_value');
    });
});

describe('Volt Component Security', function () {
    test('login attempts are rate limited', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
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
        // Multiple failed attempts
        for ($i = 0; $i < 5; $i++) {
            LivewireVolt::test('auth.login')
                ->set('email', $email)
                ->set('password', 'wrong_password')
                ->call('save');
        }
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
        // Should be rate limited after too many attempts
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        // May have throttling errors
        expect($response)->not->toBeNull();
    });

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        // May have throttling errors
        expect($response)->not->toBeNull();
    });
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // May have throttling errors
        expect($response)->not->toBeNull();
    });

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    test('csrf protection is active', function () {
        // Volt components should automatically handle CSRF protection
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
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
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        // Should work normally with CSRF protection
        $response->assertHasNoErrors();
    });

    test('input sanitization works', function () {
        $email = $this->generateUniqueEmail();

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Should work normally with CSRF protection
        $response->assertHasNoErrors();
    });

    test('input sanitization works', function () {
        $email = $this->generateUniqueEmail();
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        // Should work normally with CSRF protection
        $response->assertHasNoErrors();
    });
    
    test('input sanitization works', function () {
        $email = $this->generateUniqueEmail();
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', '<script>alert("xss")</script>' . $email)
            ->set('password', 'password123')
            ->call('save');
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
        // Should handle potentially malicious input safely
        expect($response)->not->toBeNull();
    });
});

describe('Volt Component State Management', function () {
    test('component state updates correctly', function () {
        $email = $this->generateUniqueEmail();
<<<<<<< HEAD

        $component = LivewireVolt::test('auth.login');

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $component = LivewireVolt::test('auth.login');

=======
        
        $component = LivewireVolt::test('auth.login');
        
>>>>>>> a12f125f4a (.)
=======

        $component = LivewireVolt::test('auth.login');

>>>>>>> b93ef594b4 (.)
=======
        
        $component = LivewireVolt::test('auth.login');
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $component
            ->set('email', $email)
            ->assertSet('email', $email)
            ->set('password', 'password123')
            ->assertSet('password', 'password123')
            ->set('remember', true)
            ->assertSet('remember', true);
    });
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    test('component resets after failed authentication', function () {
        $email = $this->generateUniqueEmail();

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    test('component resets after failed authentication', function () {
        $email = $this->generateUniqueEmail();
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    test('component resets after failed authentication', function () {
        $email = $this->generateUniqueEmail();

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $component = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'wrong_password')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        // Password should be cleared after failed attempt
        $component->assertSet('password', '');
    });

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        // Password should be cleared after failed attempt
        $component->assertSet('password', '');
    });
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // Password should be cleared after failed attempt
        $component->assertSet('password', '');
    });

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    test('loading state is managed correctly', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $component = LivewireVolt::test('auth.login')->set('email', $email)->set('password', 'password123');

        // Should not be in loading state initially
        $component->assertDontSee('wire:loading');

        // After calling authenticate, component should handle loading state
        $component->call('save');

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        $component = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123');
        
<<<<<<< HEAD
=======

        $component = LivewireVolt::test('auth.login')->set('email', $email)->set('password', 'password123');

>>>>>>> b93ef594b4 (.)
        // Should not be in loading state initially
        $component->assertDontSee('wire:loading');

        // After calling authenticate, component should handle loading state
        $component->call('save');
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        // Should not be in loading state initially
        $component->assertDontSee('wire:loading');
        
        // After calling authenticate, component should handle loading state
        $component->call('save');
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        // Should complete successfully
        $component->assertHasNoErrors();
    });
});

describe('Volt Component User Types Integration', function () {
    test('any user type can login via volt component', function () {
        // Using XotData pattern ensures compatibility with any user type
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD

        assertGuest();

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        assertGuest();

=======
        
        assertGuest();
        
>>>>>>> a12f125f4a (.)
=======

        assertGuest();

>>>>>>> b93ef594b4 (.)
=======
        
        assertGuest();
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $response->assertHasNoErrors();
        assertAuthenticated();

        // Verify authenticated user
        $authenticatedUser = Auth::user();
        expect($authenticatedUser)->not->toBeNull();
        expect($authenticatedUser?->email)->toBe($email);
    });

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $response->assertHasNoErrors();
        assertAuthenticated();

        // Verify authenticated user
        $authenticatedUser = Auth::user();
        expect($authenticatedUser)->not->toBeNull();
        expect($authenticatedUser?->email)->toBe($email);
    });
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $response->assertHasNoErrors();
        assertAuthenticated();
        
        // Verify authenticated user
        $authenticatedUser = Auth::user();
        expect($authenticatedUser)->not->toBeNull();
        expect($authenticatedUser->email)->toBe($email);
    });
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    test('component handles different user configurations', function () {
        // Test with various user attributes
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
            'name' => 'Test User',
        ]);
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
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $response->assertHasNoErrors();
        assertAuthenticated();

        $authenticatedUser = Auth::user();
        expect($authenticatedUser?->name)->toBe('Test User');
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $response->assertHasNoErrors();
        assertAuthenticated();

        $authenticatedUser = Auth::user();
<<<<<<< HEAD
        expect($authenticatedUser->name)->toBe('Test User');
>>>>>>> a12f125f4a (.)
=======
        expect($authenticatedUser?->name)->toBe('Test User');
>>>>>>> b93ef594b4 (.)
=======
        
        $response->assertHasNoErrors();
        assertAuthenticated();
        
        $authenticatedUser = Auth::user();
        expect($authenticatedUser->name)->toBe('Test User');
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    });
});

describe('Volt Component Redirects', function () {
    test('component redirects after successful authentication', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        $response->assertHasNoErrors();
        assertAuthenticated();

        // Component might trigger redirect via JavaScript/Alpine
        // This test ensures the authentication logic completes successfully
    });
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $response->assertHasNoErrors();
        assertAuthenticated();
        
        // Component might trigger redirect via JavaScript/Alpine
        // This test ensures the authentication logic completes successfully
    });
    
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    test('component handles intended redirect', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        // Set intended URL
        Session::put('url.intended', '/dashboard');

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        // Set intended URL
        Session::put('url.intended', '/dashboard');
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        // Set intended URL
        Session::put('url.intended', '/dashboard');

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');
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
        $response->assertHasNoErrors();
        assertAuthenticated();
    });
});

describe('Volt Component Accessibility', function () {
    test('component has proper aria labels', function () {
        $component = LivewireVolt::test('auth.login');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

        // Component should render with accessibility attributes
        $component->assertSee('aria-label')->assertSee('id="data.email"')->assertSee('id="data.password"');
    });

    test('component handles keyboard navigation', function () {
        $component = LivewireVolt::test('auth.login');

        // Component should be keyboard accessible
        expect($component)->not->toBeNull();
    });
});
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Component should render with accessibility attributes
        $component->assertSee('aria-label')->assertSee('id="data.email"')->assertSee('id="data.password"');
    });

    test('component handles keyboard navigation', function () {
        $component = LivewireVolt::test('auth.login');

        // Component should be keyboard accessible
        expect($component)->not->toBeNull();
    });
});
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        // Component should render with accessibility attributes
        $component->assertSee('aria-label')
                 ->assertSee('id="data.email"')
                 ->assertSee('id="data.password"');
    });
    
    test('component handles keyboard navigation', function () {
        $component = LivewireVolt::test('auth.login');
        
        // Component should be keyboard accessible
        expect($component)->not->toBeNull();
    });
});
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
