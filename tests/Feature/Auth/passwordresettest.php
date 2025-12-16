<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
=======
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
<<<<<<< HEAD

uses(TestCase::class);
=======
=======
=======
>>>>>>> origin/develop
use Modules\Xot\Datas\XotData;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Livewire\Volt\Volt as LivewireVolt;
use function Pest\Laravel\{get, actingAs};
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
>>>>>>> b93ef594b4 (.)

uses(TestCase::class);
=======

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

test('reset password link screen can be rendered', function () {
    $lang = app()->getLocale();
    $response = get('/' . $lang . '/forgot-password');

    $response->assertStatus(200);
});

test('reset password link can be requested', function () {
    Notification::fake();

    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

<<<<<<< HEAD
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');
=======
    LivewireVolt::test('auth.forgot-password')
        ->set('email', $user->email)
        ->call('sendPasswordResetLink');
>>>>>>> a12f125f4a (.)
=======
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');
>>>>>>> b93ef594b4 (.)
=======
    LivewireVolt::test('auth.forgot-password')
        ->set('email', $user->email)
        ->call('sendPasswordResetLink');
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

    Notification::assertSentTo($user, ResetPassword::class);
});

test('reset password screen can be rendered', function () {
    Notification::fake();

    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();
    $lang = app()->getLocale();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($lang) {
        $response = get('/' . $lang . '/reset-password/' . $notification->token);
        $response->assertStatus(200);
        return true;
    });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    LivewireVolt::test('auth.forgot-password')
        ->set('email', $user->email)
        ->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, 
        function ($notification) use ($lang) {
            $response = get('/' . $lang . '/reset-password/' . $notification->token);
            $response->assertStatus(200);
            return true;
        }
    );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($lang) {
        $response = get('/' . $lang . '/reset-password/' . $notification->token);
        $response->assertStatus(200);
        return true;
    });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

test('password can be reset with valid token', function () {
    Notification::fake();

    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();
    $lang = app()->getLocale();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user, $lang) {
        $response = LivewireVolt::test('auth.reset-password', ['token' => $notification->token])
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    LivewireVolt::test('auth.forgot-password')
        ->set('email', $user->email)
        ->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, 
        function ($notification) use ($user, $lang) {
            $response = LivewireVolt::test(
                'auth.reset-password', 
                ['token' => $notification->token]
            )
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user, $lang) {
        $response = LivewireVolt::test('auth.reset-password', ['token' => $notification->token])
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
            ->set('email', $user->email)
            ->set('password', 'password')
            ->set('password_confirmation', 'password')
            ->call('resetPassword');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        $response->assertHasNoErrors()->assertRedirect(route('login', absolute: false));

        return true;
    });
});
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            $response
                ->assertHasNoErrors()
                ->assertRedirect(route('login', absolute: false));

            return true;
        }
    );
<<<<<<< HEAD
});
>>>>>>> a12f125f4a (.)
=======
        $response->assertHasNoErrors()->assertRedirect(route('login', absolute: false));

        return true;
    });
});
>>>>>>> b93ef594b4 (.)
=======
});
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
