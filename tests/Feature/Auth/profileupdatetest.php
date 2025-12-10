<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Xot\Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
<<<<<<< HEAD
=======
use Modules\Xot\Datas\XotData;
use Livewire\Volt\Volt as LivewireVolt;
use function Pest\Laravel\{actingAs, get};
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)

uses(TestCase::class);

test('profile page is displayed', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();
<<<<<<< HEAD
<<<<<<< HEAD

    $lang = app()->getLocale();
    actingAs($user)->get('/' . $lang . '/settings/profile')->assertOk();
=======
    
    $lang = app()->getLocale();
    actingAs($user)
        ->get('/' . $lang . '/settings/profile')
        ->assertOk();
>>>>>>> 3401a6b (.)
=======

    $lang = app()->getLocale();
    actingAs($user)->get('/' . $lang . '/settings/profile')->assertOk();
>>>>>>> 1377a46 (.)
});

test('profile information can be updated', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    actingAs($user);

    $response = LivewireVolt::test('settings.profile')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->call('updateProfileInformation');

    $response->assertHasNoErrors();

    $user->refresh();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
    expect($user->name)
        ->toBe('Test User')
        ->and($user->email)
        ->toBe('test@example.com')
        ->and($user->email_verified_at)
        ->toBeNull();
<<<<<<< HEAD
=======
    expect($user->name)->toBe('Test User')
        ->and($user->email)->toBe('test@example.com')
        ->and($user->email_verified_at)->toBeNull();
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
});

test('email verification status is unchanged when email address is unchanged', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    actingAs($user);

    $response = LivewireVolt::test('settings.profile')
        ->set('name', 'Test User')
        ->set('email', $user->email)
        ->call('updateProfileInformation');

    $response->assertHasNoErrors();

    expect($user->refresh()->email_verified_at)->not->toBeNull();
});

test('user can delete their account', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    actingAs($user);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'password')->call('deleteUser');

    $response->assertHasNoErrors()->assertRedirect('/');

    expect($user->fresh())->toBeNull()->and(auth()->check())->toBeFalse();
<<<<<<< HEAD
=======
    $response = LivewireVolt::test('settings.delete-user-form')
        ->set('password', 'password')
        ->call('deleteUser');

    $response
        ->assertHasNoErrors()
        ->assertRedirect('/');

    expect($user->fresh())->toBeNull()
        ->and(auth()->check())->toBeFalse();
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
});

test('correct password must be provided to delete account', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    actingAs($user);

<<<<<<< HEAD
<<<<<<< HEAD
    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'wrong-password')->call('deleteUser');
=======
    $response = LivewireVolt::test('settings.delete-user-form')
        ->set('password', 'wrong-password')
        ->call('deleteUser');
>>>>>>> 3401a6b (.)
=======
    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'wrong-password')->call('deleteUser');
>>>>>>> 1377a46 (.)

    $response->assertHasErrors(['password']);

    expect($user->fresh())->not->toBeNull();
<<<<<<< HEAD
<<<<<<< HEAD
});
=======
});
>>>>>>> 3401a6b (.)
=======
});
>>>>>>> 1377a46 (.)
