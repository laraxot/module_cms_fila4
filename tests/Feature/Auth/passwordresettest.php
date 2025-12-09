<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
<<<<<<< HEAD
=======
use Modules\Xot\Datas\XotData;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Livewire\Volt\Volt as LivewireVolt;
use function Pest\Laravel\{get, actingAs};
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)

uses(TestCase::class);

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
<<<<<<< HEAD
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');
=======
    LivewireVolt::test('auth.forgot-password')
        ->set('email', $user->email)
        ->call('sendPasswordResetLink');
>>>>>>> 3401a6b (.)
=======
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');
>>>>>>> 1377a46 (.)

    Notification::assertSentTo($user, ResetPassword::class);
});

test('reset password screen can be rendered', function () {
    Notification::fake();

    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();
    $lang = app()->getLocale();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($lang) {
        $response = get('/' . $lang . '/reset-password/' . $notification->token);
        $response->assertStatus(200);
        return true;
    });
<<<<<<< HEAD
=======
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
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
});

test('password can be reset with valid token', function () {
    Notification::fake();

    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();
    $lang = app()->getLocale();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
    LivewireVolt::test('auth.forgot-password')->set('email', $user->email)->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user, $lang) {
        $response = LivewireVolt::test('auth.reset-password', ['token' => $notification->token])
<<<<<<< HEAD
=======
    LivewireVolt::test('auth.forgot-password')
        ->set('email', $user->email)
        ->call('sendPasswordResetLink');

    Notification::assertSentTo($user, ResetPassword::class, 
        function ($notification) use ($user, $lang) {
            $response = LivewireVolt::test(
                'auth.reset-password', 
                ['token' => $notification->token]
            )
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
            ->set('email', $user->email)
            ->set('password', 'password')
            ->set('password_confirmation', 'password')
            ->call('resetPassword');

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
        $response->assertHasNoErrors()->assertRedirect(route('login', absolute: false));

        return true;
    });
});
<<<<<<< HEAD
=======
            $response
                ->assertHasNoErrors()
                ->assertRedirect(route('login', absolute: false));

            return true;
        }
    );
});
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
