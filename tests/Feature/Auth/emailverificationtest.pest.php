<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
declare(strict_types=1);


namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Cms\Tests\TestCase;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
<<<<<<< HEAD

uses(TestCase::class);
=======
=======
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Cms\Tests\TestCase;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
<<<<<<< HEAD
use function Pest\Laravel\{actingAs, get};
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
>>>>>>> b93ef594b4 (.)

uses(TestCase::class);
=======
namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Xot\Datas\XotData;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use function Pest\Laravel\{actingAs, get};

uses(\Modules\Cms\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

// Test: Email verification screen can be rendered
test('email verification screen can be rendered', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->unverified()->create();

    $lang = app()->getLocale();
    $response = actingAs($user)->get('/' . $lang . '/verify-email');
    $response->assertStatus(200);
});

// Test: Email can be verified
test('email can be verified', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->unverified()->create();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)

    Event::fake();

    $verificationUrl = URL::temporarySignedRoute('verification.verify', now()->addMinutes(60), [
        'id' => $user->id,
        'hash' => sha1($user->email),
    ]);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    Event::fake();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1($user->email)]
    );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    Event::fake();

    $verificationUrl = URL::temporarySignedRoute('verification.verify', now()->addMinutes(60), [
        'id' => $user->id,
        'hash' => sha1($user->email),
    ]);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

    $response = actingAs($user)->get($verificationUrl);

    Event::assertDispatched(Verified::class);
    expect($user->fresh()->hasVerifiedEmail())
        ->toBeTrue()
        ->and($response)
<<<<<<< HEAD
        ->assertRedirect(route('dashboard', absolute: false) . '?verified=1');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ->assertRedirect(route('dashboard', absolute: false) . '?verified=1');
=======
        ->assertRedirect(route('dashboard', absolute: false).'?verified=1');
>>>>>>> a12f125f4a (.)
=======
        ->assertRedirect(route('dashboard', absolute: false) . '?verified=1');
>>>>>>> b93ef594b4 (.)
=======
        ->assertRedirect(route('dashboard', absolute: false).'?verified=1');
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

// Test: Email is not verified with invalid hash
test('email is not verified with invalid hash', function () {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->unverified()->create();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)

    $verificationUrl = URL::temporarySignedRoute('verification.verify', now()->addMinutes(60), [
        'id' => $user->id,
        'hash' => sha1('wrong-email'),
    ]);
<<<<<<< HEAD

    actingAs($user)->get($verificationUrl);

=======
<<<<<<< HEAD

    actingAs($user)->get($verificationUrl);

=======
=======
>>>>>>> origin/develop
    
    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1('wrong-email')]
    );

    actingAs($user)->get($verificationUrl);
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    actingAs($user)->get($verificationUrl);

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    expect($user->fresh()->hasVerifiedEmail())->toBeFalse();
});
