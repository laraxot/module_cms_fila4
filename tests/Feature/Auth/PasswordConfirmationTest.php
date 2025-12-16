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
test('confirm password screen can be rendered', function (): void {
    /** @var class-string<\Illuminate\Database\Eloquent\Model> $userClass */
    $userClass = XotData::make()->getUserClass();
    /** @var \Illuminate\Contracts\Auth\Authenticatable&\Illuminate\Database\Eloquent\Model $user */
=======
test('confirm password page can be rendered', function (): void {
    $xotData = XotData::make();
    $userClass = $xotData->getUserClass();
<<<<<<< HEAD
    
>>>>>>> 1810cfd (.)
=======

>>>>>>> 46d657c (.)
=======
test('confirm password screen can be rendered', function () {
    $userClass = XotData::make()->getUserClass();
>>>>>>> c18bda2 (.)
    $user = $userClass::factory()->create();

    $lang = app()->getLocale();
    $response = actingAs($user)->get('/' . $lang . '/confirm-password');

    $response->assertStatus(200);
});

<<<<<<< HEAD
test('password can be confirmed', function (): void {
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
test('password can be confirmed', function () {
    $userClass = XotData::make()->getUserClass();
>>>>>>> c18bda2 (.)
    $user = $userClass::factory()->create();

    actingAs($user);

    $response = LivewireVolt::test('auth.confirm-password')->set('password', 'password')->call('confirmPassword');

    $response->assertHasNoErrors()->assertRedirect(route('dashboard', absolute: false));
});

<<<<<<< HEAD
test('password is not confirmed with invalid password', function (): void {
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
test('password is not confirmed with invalid password', function () {
    $userClass = XotData::make()->getUserClass();
>>>>>>> c18bda2 (.)
    $user = $userClass::factory()->create();

    actingAs($user);

    $response = LivewireVolt::test('auth.confirm-password')->set('password', 'wrong-password')->call('confirmPassword');

    $response->assertHasErrors(['password']);
});
