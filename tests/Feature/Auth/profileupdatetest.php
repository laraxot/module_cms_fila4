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
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
<<<<<<< HEAD

uses(TestCase::class);
=======
=======
use Modules\Xot\Datas\XotData;
use Livewire\Volt\Volt as LivewireVolt;
use function Pest\Laravel\{actingAs, get};
>>>>>>> a12f125f4a (.)
=======
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
>>>>>>> b93ef594b4 (.)

uses(TestCase::class);
=======
use Modules\Xot\Datas\XotData;
use Livewire\Volt\Volt as LivewireVolt;
use function Pest\Laravel\{actingAs, get};

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

test('profile page is displayed', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();
<<<<<<< HEAD

    $lang = app()->getLocale();
    actingAs($user)->get('/' . $lang . '/settings/profile')->assertOk();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    $lang = app()->getLocale();
    actingAs($user)->get('/' . $lang . '/settings/profile')->assertOk();
=======
=======
>>>>>>> origin/develop
    
    $lang = app()->getLocale();
    actingAs($user)
        ->get('/' . $lang . '/settings/profile')
        ->assertOk();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    $lang = app()->getLocale();
    actingAs($user)->get('/' . $lang . '/settings/profile')->assertOk();
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
    expect($user->name)
        ->toBe('Test User')
        ->and($user->email)
        ->toBe('test@example.com')
        ->and($user->email_verified_at)
        ->toBeNull();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    expect($user->name)->toBe('Test User')
        ->and($user->email)->toBe('test@example.com')
        ->and($user->email_verified_at)->toBeNull();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    expect($user->name)->toBe('Test User')
        ->and($user->email)->toBe('test@example.com')
        ->and($user->email_verified_at)->toBeNull();
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'password')->call('deleteUser');

    $response->assertHasNoErrors()->assertRedirect('/');

    expect($user->fresh())->toBeNull()->and(auth()->check())->toBeFalse();
<<<<<<< HEAD
=======
=======
    $response = LivewireVolt::test('settings.delete-user-form')
        ->set('password', 'password')
        ->call('deleteUser');
=======
    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'password')->call('deleteUser');
>>>>>>> b93ef594b4 (.)

    $response->assertHasNoErrors()->assertRedirect('/');

<<<<<<< HEAD
    expect($user->fresh())->toBeNull()
        ->and(auth()->check())->toBeFalse();
>>>>>>> a12f125f4a (.)
=======
    expect($user->fresh())->toBeNull()->and(auth()->check())->toBeFalse();
>>>>>>> b93ef594b4 (.)
=======
    $response = LivewireVolt::test('settings.delete-user-form')
        ->set('password', 'password')
        ->call('deleteUser');

    $response
        ->assertHasNoErrors()
        ->assertRedirect('/');

    expect($user->fresh())->toBeNull()
        ->and(auth()->check())->toBeFalse();
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

test('correct password must be provided to delete account', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    actingAs($user);

<<<<<<< HEAD
    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'wrong-password')->call('deleteUser');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'wrong-password')->call('deleteUser');
=======
    $response = LivewireVolt::test('settings.delete-user-form')
        ->set('password', 'wrong-password')
        ->call('deleteUser');
>>>>>>> a12f125f4a (.)
=======
    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'wrong-password')->call('deleteUser');
>>>>>>> b93ef594b4 (.)
=======
    $response = LivewireVolt::test('settings.delete-user-form')
        ->set('password', 'wrong-password')
        ->call('deleteUser');
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

    $response->assertHasErrors(['password']);

    expect($user->fresh())->not->toBeNull();
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
});
=======
});
>>>>>>> a12f125f4a (.)
=======
});
>>>>>>> b93ef594b4 (.)
=======
});
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
