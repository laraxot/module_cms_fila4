<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
use Livewire\Volt\Volt as LivewireVolt;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
use function Pest\Laravel\post;
<<<<<<< HEAD
=======
use Modules\Xot\Datas\XotData;
use Livewire\Volt\Volt as LivewireVolt;
use function Pest\Laravel\{get, post, actingAs};
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)

uses(TestCase::class);

test('login screen can be rendered', function (): void {
    $lang = app()->getLocale();
<<<<<<< HEAD
<<<<<<< HEAD
    get('/' . $lang . '/auth/login')->assertStatus(200);
=======
    get('/'.$lang.'/auth/login')->assertStatus(200);
>>>>>>> 3401a6b (.)
=======
    get('/' . $lang . '/auth/login')->assertStatus(200);
>>>>>>> 1377a46 (.)
});

test('users can authenticate using the login screen', function (): void {
    $userClass = XotData::make()->getUserClass();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
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
    $factory=$userClass::factory();
    /*
    $connection_name=app($userClass)->getConnectionName();
    dddx([
    'connection_name' => $connection_name,
    'factory'=>$factory->raw(),
    //'config'=>config('database'),

    ]);  
    */
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
    $user = $factory->create();

    $response = LivewireVolt::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'password')
        ->call('authenticate');

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
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
    $response
        ->assertHasNoErrors()
        //->assertRedirect(route('dashboard', absolute: false))
        ;

    //expect(Auth::user())->not->toBeNull();
});
/*
test('users cannot authenticate with invalid password', function (): void {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    $response = LivewireVolt::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'wrong-password')
        ->call('login');

    $response->assertHasErrors('email');

    expect(Auth::guest())->toBeTrue();
});

test('users can logout', function (): void {
    $userClass = XotData::make()->getUserClass();
    $user = $userClass::factory()->create();

    $response = actingAs($user)->post('/logout');

    $response->assertRedirect('/');

    expect(Auth::guest())->toBeTrue();
});
*/
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
