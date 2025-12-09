<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature\Auth;

<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Modules\Xot\Datas\XotData;
=======
<<<<<<< HEAD
use Modules\Xot\Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\assertGuest;
use function Pest\Laravel\get;
<<<<<<< HEAD

uses(TestCase::class);
=======
<<<<<<< HEAD
=======
use function Pest\Laravel\{get, actingAs, assertGuest, assertAuthenticated};
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)

uses(TestCase::class);
=======
use Illuminate\Support\Facades\Hash;
use Modules\Xot\Datas\XotData;
use function Pest\Laravel\{get, actingAs, assertGuest, assertAuthenticated};

uses(\Modules\Xot\Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

// NOTE: Helper functions moved to Modules\Xot\Tests\TestCase for DRY pattern
// Use $this->createTestUser()

describe('Register Page', function () {
    test('register page renders for guest', function () {
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/register');
        $response->assertStatus(200);
    });

    test('authenticated user is redirected away from register page', function () {
        $user = $this->createTestUser();
        actingAs($user);
        $locale = app()->getLocale();
        $response = get('/' . $locale . '/auth/register');
        $response->assertRedirect('/');
    });
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======


>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});
