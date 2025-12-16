<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Xot\Tests\TestCase;
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

uses(TestCase::class);

<<<<<<< HEAD
<<<<<<< HEAD
test('profile page is displayed', function (): void {
    /** @var class-string<\Illuminate\Database\Eloquent\Model> $userClass */
    $userClass = XotData::make()->getUserClass();
    /** @var \Illuminate\Contracts\Auth\Authenticatable&\Illuminate\Database\Eloquent\Model $user */
=======
test('profile page can be rendered', function (): void {
    $xotData = XotData::make();
    $userClass = $xotData->getUserClass();
<<<<<<< HEAD
    
>>>>>>> 1810cfd (.)
=======

>>>>>>> 46d657c (.)
=======
test('profile page is displayed', function () {
    $userClass = XotData::make()->getUserClass();
>>>>>>> c18bda2 (.)
    $user = $userClass::factory()->create();

    $lang = app()->getLocale();
    actingAs($user)->get('/' . $lang . '/settings/profile')->assertOk();
});

<<<<<<< HEAD
test('profile information can be updated', function (): void {
<<<<<<< HEAD
    /** @var class-string<\Illuminate\Database\Eloquent\Model> $userClass */
    $userClass = XotData::make()->getUserClass();
    /** @var \Illuminate\Contracts\Auth\Authenticatable&\Illuminate\Database\Eloquent\Model $user */
=======
    $xotData = XotData::make();
    $userClass = $xotData->getUserClass();
<<<<<<< HEAD
    
>>>>>>> 1810cfd (.)
=======

>>>>>>> 46d657c (.)
=======
test('profile information can be updated', function () {
    $userClass = XotData::make()->getUserClass();
>>>>>>> c18bda2 (.)
    $user = $userClass::factory()->create();

    actingAs($user);

    $response = LivewireVolt::test('settings.profile')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->call('updateProfileInformation');

    $response->assertHasNoErrors();

    $user->refresh();

    expect($user->name)
        ->toBe('Test User')
        ->and($user->email)
        ->toBe('test@example.com')
        ->and($user->email_verified_at)
        ->toBeNull();
});

<<<<<<< HEAD
test('email verification status is unchanged when email address is unchanged', function (): void {
<<<<<<< HEAD
    /** @var class-string<\Illuminate\Database\Eloquent\Model> $userClass */
    $userClass = XotData::make()->getUserClass();
    /** @var \Illuminate\Contracts\Auth\Authenticatable&\Illuminate\Database\Eloquent\Model $user */
=======
    $xotData = XotData::make();
    $userClass = $xotData->getUserClass();
<<<<<<< HEAD
    
>>>>>>> 1810cfd (.)
=======

>>>>>>> 46d657c (.)
=======
test('email verification status is unchanged when email address is unchanged', function () {
    $userClass = XotData::make()->getUserClass();
>>>>>>> c18bda2 (.)
    $user = $userClass::factory()->create();

    actingAs($user);

    $response = LivewireVolt::test('settings.profile')
        ->set('name', 'Test User')
        ->set('email', $user->email)
        ->call('updateProfileInformation');

    $response->assertHasNoErrors();

    expect($user->refresh()->email_verified_at)->not->toBeNull();
});

<<<<<<< HEAD
test('user can delete their account', function (): void {
<<<<<<< HEAD
    /** @var class-string<\Illuminate\Database\Eloquent\Model> $userClass */
    $userClass = XotData::make()->getUserClass();
    /** @var \Illuminate\Contracts\Auth\Authenticatable&\Illuminate\Database\Eloquent\Model $user */
=======
    $xotData = XotData::make();
    $userClass = $xotData->getUserClass();
<<<<<<< HEAD
    
>>>>>>> 1810cfd (.)
=======

>>>>>>> 46d657c (.)
=======
test('user can delete their account', function () {
    $userClass = XotData::make()->getUserClass();
>>>>>>> c18bda2 (.)
    $user = $userClass::factory()->create();

    actingAs($user);

    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'password')->call('deleteUser');

    $response->assertHasNoErrors()->assertRedirect('/');

    expect($user->fresh())->toBeNull()->and(auth()->check())->toBeFalse();
});

<<<<<<< HEAD
test('correct password must be provided to delete account', function (): void {
<<<<<<< HEAD
    /** @var class-string<\Illuminate\Database\Eloquent\Model> $userClass */
    $userClass = XotData::make()->getUserClass();
    /** @var \Illuminate\Contracts\Auth\Authenticatable&\Illuminate\Database\Eloquent\Model $user */
=======
    $xotData = XotData::make();
    $userClass = $xotData->getUserClass();
<<<<<<< HEAD
    
>>>>>>> 1810cfd (.)
=======

>>>>>>> 46d657c (.)
=======
test('correct password must be provided to delete account', function () {
    $userClass = XotData::make()->getUserClass();
>>>>>>> c18bda2 (.)
    $user = $userClass::factory()->create();

    actingAs($user);

    $response = LivewireVolt::test('settings.delete-user-form')->set('password', 'wrong-password')->call('deleteUser');

    $response->assertHasErrors(['password']);

    expect($user->fresh())->not->toBeNull();
});
