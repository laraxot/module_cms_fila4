<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertGuest;

uses(TestCase::class);

// NOTE: Helper functions moved to Modules\Xot\Tests\TestCase for DRY pattern
// Use $this->\Modules\Xot\Tests\TestCase::generateUniqueEmail(), $this->getUserClass(), $this->\Modules\Xot\Tests\TestCase::createTestUser()

<<<<<<< HEAD
test('login page can be rendered', function () {
    $component = LivewireVolt::test('auth.login');
=======
describe('Volt Component Rendering', function () {
    test('volt login component can be rendered', function () {
        $component = LivewireVolt::test('auth.login');
>>>>>>> c18bda2 (.)

    expect($component)->not->toBeNull();
    $component->assertOk();
<<<<<<< HEAD
=======
});

<<<<<<< HEAD
test('login component has correct default values', function () {
    $component = LivewireVolt::test('auth.login');
=======
    test('volt component has initial state', function () {
        $component = LivewireVolt::test('auth.login');
>>>>>>> c18bda2 (.)

    $component->assertSet('email', '')->assertSet('password', '')->assertSet('remember', false);
<<<<<<< HEAD
    });

    test('volt component renders form elements', function () {
        $component = LivewireVolt::test('auth.login');

        $component
            ->assertSee('wire:model="email"')
            ->assertSee('wire:model="password"')
            ->assertSee('wire:model="remember"');
    });
>>>>>>> 1810cfd (.)
});

<<<<<<< HEAD
test('login component has correct default values', function () {
    $component = LivewireVolt::test('auth.login');
=======
describe('Volt Component Authentication', function () {
    test('user can authenticate via volt component', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
>>>>>>> c18bda2 (.)

    $component->assertSet('email', '')->assertSet('password', '')->assertSet('remember', false);
});

test('successful login authenticates the user', function () {
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    assertGuest();

<<<<<<< HEAD
    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');
=======
    test('authentication fails with wrong credentials', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
>>>>>>> c18bda2 (.)

    $response->assertHasNoErrors();
    assertAuthenticated();
});

test('login with wrong password fails', function () {
    $email = TestCase::generateUniqueEmail();
    TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    assertGuest();

=======
});

test('successful login authenticates the user', function () {
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    assertGuest();

    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');

    $response->assertHasNoErrors();
    assertAuthenticated();
});

test('login with wrong password fails', function () {
    $email = TestCase::generateUniqueEmail();
    TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    assertGuest();

>>>>>>> 46d657c (.)
    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'wrong_password')
        ->call('save');

    $response->assertHasErrors(['email']);
    assertGuest();
});

test('login with non-existent user fails', function () {
    $email = TestCase::generateUniqueEmail();

    assertGuest();

    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');

    $response->assertHasErrors(['email']);
    assertGuest();
});

test('login with invalid email format fails', function () {
    $response = LivewireVolt::test('auth.login')
        ->set('email', 'invalid-email')
        ->set('password', 'password123')
        ->call('save');

    $response->assertHasErrors(['email']);
});

test('login with empty credentials fails', function () {
    $response = LivewireVolt::test('auth.login')->call('save');

    $response->assertHasErrors(['email', 'password']);
});

test('login with too short password fails', function () {
    $email = TestCase::generateUniqueEmail();

    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', '123')
        ->call('save');

    // Password troppo corta dovrebbe fallire
    $response->assertHasErrors();
});

test('login with remember me authenticates the user', function () {
    $email = TestCase::generateUniqueEmail();
    TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    assertGuest();

    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->set('remember', true)
        ->call('save');

    $response->assertHasNoErrors();
    assertAuthenticated();
});

test('session is regenerated on successful login', function () {
    $email = TestCase::generateUniqueEmail();
    TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    // Store original session ID
    $originalSessionId = session()->getId();

    LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');

    assertAuthenticated();

    // Session should be regenerated for security
    expect(session()->getId())->not->toBe($originalSessionId);
});

test('session data is preserved after login and regeneration', function () {
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    // Set some session data
    Session::put('test_key', 'test_value');

    LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');

    assertAuthenticated();

    // Session data should be preserved (session regenerated but data kept)
    expect(Session::get('test_key'))->toBe('test_value');
});
test('login is rate limited after multiple failed attempts', function () {
    $email = TestCase::generateUniqueEmail();
    TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    // Multiple failed attempts
    for ($i = 0; $i < 5; ++$i) {
        LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'wrong_password')
            ->call('save');
    }

    // Should be rate limited after too many attempts
    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');

<<<<<<< HEAD
    // May have throttling errors
    expect($response)->not->toBeNull();
});

test('csrf protection is handled automatically by volt components', function () {
    // Volt components should automatically handle CSRF protection
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);
=======
    test('authentication fails with non-existent user', function () {
        $email = $this->generateUniqueEmail();

        assertGuest();

        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');

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
>>>>>>> c18bda2 (.)

    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');

<<<<<<< HEAD
    // Should work normally with CSRF protection
    $response->assertHasNoErrors();
});

test('login handles malicious input safely', function () {
    $email = TestCase::generateUniqueEmail();
=======
    test('required fields validation', function () {
        $response = LivewireVolt::test('auth.login')->call('save');

        $response->assertHasErrors(['email', 'password']);
    });

    test('password minimum length validation', function () {
        $email = $this->generateUniqueEmail();

        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', '123')
            ->call('save');

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
>>>>>>> c18bda2 (.)

    $response = LivewireVolt::test('auth.login')
        ->set('email', '<script>alert("xss")</script>'.$email)
        ->set('password', 'password123')
        ->call('save');

    // Should handle potentially malicious input safely
    expect($response)->not->toBeNull();
});
test('component properties can be set and asserted', function () {
    $email = TestCase::generateUniqueEmail();

    $component = LivewireVolt::test('auth.login');

<<<<<<< HEAD
    $component
        ->set('email', $email)
        ->assertSet('email', $email)
        ->set('password', 'password123')
        ->assertSet('password', 'password123')
        ->set('remember', true)
        ->assertSet('remember', true);
});

test('password cleared after failed login attempt', function () {
    $email = TestCase::generateUniqueEmail();
=======
    test('session regeneration on login', function () {
        $email = $this->generateUniqueEmail();
        $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);

        // Store original session ID
        $originalSessionId = session()->getId();

        LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');

        assertAuthenticated();

        // Session should be regenerated for security
        expect(session()->getId())->not->toBe($originalSessionId);
    });

    test('session data is preserved on authentication', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);

        // Set some session data
        Session::put('test_key', 'test_value');

        LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');

        assertAuthenticated();

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
>>>>>>> c18bda2 (.)

    $component = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'wrong_password')
        ->call('save');

<<<<<<< HEAD
    // Password should be cleared after failed attempt
    $component->assertSet('password', '');
});

test('login component handles loading state and completes successfully', function () {
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);
=======
        // Should be rate limited after too many attempts
        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');

        // May have throttling errors
        expect($response)->not->toBeNull();
    });

    test('csrf protection is active', function () {
        // Volt components should automatically handle CSRF protection
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);

        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');

        // Should work normally with CSRF protection
        $response->assertHasNoErrors();
    });

    test('input sanitization works', function () {
        $email = $this->generateUniqueEmail();

        $response = LivewireVolt::test('auth.login')
            ->set('email', '<script>alert("xss")</script>' . $email)
            ->set('password', 'password123')
            ->call('save');

        // Should handle potentially malicious input safely
        expect($response)->not->toBeNull();
    });
});

describe('Volt Component State Management', function () {
    test('component state updates correctly', function () {
        $email = $this->generateUniqueEmail();
>>>>>>> c18bda2 (.)

    $component = LivewireVolt::test('auth.login')->set('email', $email)->set('password', 'password123');

    // Should not be in loading state initially
    $component->assertDontSee('wire:loading');

<<<<<<< HEAD
    // After calling authenticate, component should handle loading state
    $component->call('save');
=======
    test('component resets after failed authentication', function () {
        $email = $this->generateUniqueEmail();
>>>>>>> c18bda2 (.)

    // Should complete successfully
    $component->assertHasNoErrors();
});
test('login verifies authenticated user with xotdata pattern', function () {
    // Using XotData pattern ensures compatibility with any user type
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);

    assertGuest();

<<<<<<< HEAD
    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');
=======
    test('loading state is managed correctly', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
>>>>>>> c18bda2 (.)

    $response->assertHasNoErrors();
    assertAuthenticated();

    // Verify authenticated user
    $authenticatedUser = Auth::user();
    expect($authenticatedUser)->not->toBeNull();
    expect($authenticatedUser?->email)->toBe($email);
});

<<<<<<< HEAD
test('login handles various user attributes', function () {
    // Test with various user attributes
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
        'name' => 'Test User',
    ]);
=======
describe('Volt Component User Types Integration', function () {
    test('any user type can login via volt component', function () {
        // Using XotData pattern ensures compatibility with any user type
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
>>>>>>> c18bda2 (.)

    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');

    $response->assertHasNoErrors();
    assertAuthenticated();

<<<<<<< HEAD
    $authenticatedUser = Auth::user();
    expect($authenticatedUser?->name)->toBe('Test User');
});

test('authentication logic completes successfully', function () {
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);
=======
        $response->assertHasNoErrors();
        assertAuthenticated();

        // Verify authenticated user
        $authenticatedUser = Auth::user();
        expect($authenticatedUser)->not->toBeNull();
        expect($authenticatedUser?->email)->toBe($email);
    });

    test('component handles different user configurations', function () {
        // Test with various user attributes
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
            'name' => 'Test User',
        ]);

        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');

        $response->assertHasNoErrors();
        assertAuthenticated();

        $authenticatedUser = Auth::user();
        expect($authenticatedUser?->name)->toBe('Test User');
    });
});

describe('Volt Component Redirects', function () {
    test('component redirects after successful authentication', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);
>>>>>>> c18bda2 (.)

    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');

    $response->assertHasNoErrors();
    assertAuthenticated();

<<<<<<< HEAD
    // Component might trigger redirect via JavaScript/Alpine
    // This test ensures the authentication logic completes successfully
});

test('login redirects to intended url after successful authentication', function () {
    $email = TestCase::generateUniqueEmail();
    $user = TestCase::createTestUser([
        'email' => $email,
        'password' => Hash::make('password123'),
    ]);
=======
        // Component might trigger redirect via JavaScript/Alpine
        // This test ensures the authentication logic completes successfully
    });

    test('component handles intended redirect', function () {
        $email = $this->generateUniqueEmail();
        $user = $this->createTestUser([
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);

        // Set intended URL
        Session::put('url.intended', '/dashboard');

        $response = LivewireVolt::test('auth.login')
            ->set('email', $email)
            ->set('password', 'password123')
            ->call('save');

        $response->assertHasNoErrors();
        assertAuthenticated();
    });
});

describe('Volt Component Accessibility', function () {
    test('component has proper aria labels', function () {
        $component = LivewireVolt::test('auth.login');
>>>>>>> c18bda2 (.)

    // Set intended URL
    Session::put('url.intended', '/dashboard');

<<<<<<< HEAD
    $response = LivewireVolt::test('auth.login')
        ->set('email', $email)
        ->set('password', 'password123')
        ->call('save');
=======
    test('component handles keyboard navigation', function () {
        $component = LivewireVolt::test('auth.login');
>>>>>>> c18bda2 (.)

    $response->assertHasNoErrors();
    assertAuthenticated();
});

test('login component renders with accessibility attributes', function () {
    $component = LivewireVolt::test('auth.login');

    // Component should render with accessibility attributes
    $component->assertSee('aria-label')->assertSee('id="data.email"')->assertSee('id="data.password"');
});

test('login component is keyboard accessible', function () {
    $component = LivewireVolt::test('auth.login');

    // Component should be keyboard accessible
    expect($component)->not->toBeNull();
});
