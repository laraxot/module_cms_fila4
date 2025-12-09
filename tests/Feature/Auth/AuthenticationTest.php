<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\Auth;
=======
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
use function Pest\Laravel\post;
<<<<<<< HEAD
=======
=======
use Modules\Xot\Datas\XotData;
use Livewire\Volt\Volt as LivewireVolt;
use function Pest\Laravel\{get, post, actingAs};
>>>>>>> a12f125f4a (.)
=======
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
use function Pest\Laravel\post;
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)

uses(TestCase::class);

test('login screen can be rendered', function (): void {
    $lang = app()->getLocale();
<<<<<<< HEAD
    get('/' . $lang . '/auth/login')->assertStatus(200);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    get('/' . $lang . '/auth/login')->assertStatus(200);
=======
    get('/'.$lang.'/auth/login')->assertStatus(200);
>>>>>>> a12f125f4a (.)
=======
    get('/' . $lang . '/auth/login')->assertStatus(200);
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Facades\Auth;
use Modules\Xot\Datas\XotData;
use Livewire\Volt\Volt as LivewireVolt;
use function Pest\Laravel\{get, post, actingAs};

uses(\Modules\Xot\Tests\TestCase::class);

test('login screen can be rendered', function (): void {
    $lang = app()->getLocale();
    get('/'.$lang.'/auth/login')->assertStatus(200);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});

test('users can authenticate using the login screen', function (): void {
    $userClass = XotData::make()->getUserClass();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
    $factory = $userClass::factory();
    /*
     * $connection_name=app($userClass)->getConnectionName();
     * dddx([
     * 'connection_name' => $connection_name,
     * 'factory'=>$factory->raw(),
     * //'config'=>config('database'),
     *
     * ]);
     */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    $factory=$userClass::factory();
    /*
    $connection_name=app($userClass)->getConnectionName();
    dddx([
    'connection_name' => $connection_name,
    'factory'=>$factory->raw(),
    //'config'=>config('database'),

    ]);  
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    $factory = $userClass::factory();
    /*
     * $connection_name=app($userClass)->getConnectionName();
     * dddx([
     * 'connection_name' => $connection_name,
     * 'factory'=>$factory->raw(),
     * //'config'=>config('database'),
     *
     * ]);
     */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    $user = $factory->create();

    $response = LivewireVolt::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'password')
        ->call('authenticate');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
    $response->assertHasNoErrors()//->assertRedirect(route('dashboard', absolute: false))
    ;

    //expect(Auth::user())->not->toBeNull();
});

/*
 * test('users cannot authenticate with invalid password', function (): void {
 * $userClass = XotData::make()->getUserClass();
 * $user = $userClass::factory()->create();
 *
 * $response = LivewireVolt::test('auth.login')
 * ->set('email', $user->email)
 * ->set('password', 'wrong-password')
 * ->call('login');
 *
 * $response->assertHasErrors('email');
 *
 * expect(Auth::guest())->toBeTrue();
 * });
 *
 * test('users can logout', function (): void {
 * $userClass = XotData::make()->getUserClass();
 * $user = $userClass::factory()->create();
 *
 * $response = actingAs($user)->post('/logout');
 *
 * $response->assertRedirect('/');
 *
 * expect(Auth::guest())->toBeTrue();
 * });
 */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    $response
        ->assertHasNoErrors()
        //->assertRedirect(route('dashboard', absolute: false))
        ;
<<<<<<< HEAD
=======
    $response->assertHasNoErrors()//->assertRedirect(route('dashboard', absolute: false))
    ;
>>>>>>> b93ef594b4 (.)

    //expect(Auth::user())->not->toBeNull();
});

/*
<<<<<<< HEAD
=======

    //expect(Auth::user())->not->toBeNull();
});
/*
>>>>>>> origin/develop
test('users cannot authenticate with invalid password', function (): void {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    $response = LivewireVolt::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'wrong-password')
        ->call('login');

    $response->assertHasErrors('email');
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
    expect(Auth::guest())->toBeTrue();
});

test('users can logout', function (): void {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    $response = actingAs($user)->post('/logout');

    $response->assertRedirect('/');

    expect(Auth::guest())->toBeTrue();
});
<<<<<<< HEAD
*/
>>>>>>> a12f125f4a (.)
=======
 * test('users cannot authenticate with invalid password', function (): void {
 * $userClass = XotData::make()->getUserClass();
 * $user = $userClass::factory()->create();
 *
 * $response = LivewireVolt::test('auth.login')
 * ->set('email', $user->email)
 * ->set('password', 'wrong-password')
 * ->call('login');
 *
 * $response->assertHasErrors('email');
 *
 * expect(Auth::guest())->toBeTrue();
 * });
 *
 * test('users can logout', function (): void {
 * $userClass = XotData::make()->getUserClass();
 * $user = $userClass::factory()->create();
 *
 * $response = actingAs($user)->post('/logout');
 *
 * $response->assertRedirect('/');
 *
 * expect(Auth::guest())->toBeTrue();
 * });
 */
>>>>>>> b93ef594b4 (.)
=======
*/
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
