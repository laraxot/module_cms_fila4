<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
declare(strict_types=1);


namespace Modules\Cms\Tests\Feature\Auth;
<<<<<<< HEAD

=======
=======
declare(strict_types=1);
>>>>>>> b93ef594b4 (.)

=======
namespace Modules\Cms\Tests\Feature\Auth;

<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
namespace Modules\Cms\Tests\Feature\Auth;

>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Livewire\Volt\Volt;

uses(TestCase::class);
<<<<<<< HEAD
=======
=======
namespace Modules\Cms\Tests\Feature\Auth;


use Illuminate\Support\Facades\Hash;
use Livewire\Volt\Volt;

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

test('password can be updated', function () {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    $this->actingAs($user);

    $response = Volt::test('settings.password')
        ->set('current_password', 'password')
        ->set('password', 'new-password')
        ->set('password_confirmation', 'new-password')
        ->call('updatePassword');

    $response->assertHasNoErrors();

    expect(Hash::check('new-password', $user->refresh()->password))->toBeTrue();
});

test('correct password must be provided to update password', function () {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    $this->actingAs($user);

    $response = Volt::test('settings.password')
        ->set('current_password', 'wrong-password')
        ->set('password', 'new-password')
        ->set('password_confirmation', 'new-password')
        ->call('updatePassword');

    $response->assertHasErrors(['current_password']);
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
