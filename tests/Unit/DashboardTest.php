<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
use Tests\TestCase;
use function Pest\Laravel\get;

uses(TestCase::class);

test('route home returns successful response with correct view', function (): void {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
    get('/')->assertSuccessful()->assertViewIs('pub_theme::home');
});

test('route login returns successful response with correct view', function (): void {
    get('/it/login')->assertSuccessful()->assertViewIs('pub_theme::auth.login');
<<<<<<< HEAD
=======
=======
=======
use function Pest\Laravel\get;

uses(Tests\TestCase::class);

test('route home returns successful response with correct view', function (): void {
>>>>>>> origin/develop
    get('/')
        ->assertSuccessful()
        ->assertViewIs('pub_theme::home');
});

test('route login returns successful response with correct view', function (): void {
    get('/it/login')
        ->assertSuccessful()
        ->assertViewIs('pub_theme::auth.login');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    get('/')->assertSuccessful()->assertViewIs('pub_theme::home');
});

test('route login returns successful response with correct view', function (): void {
    get('/it/login')->assertSuccessful()->assertViewIs('pub_theme::auth.login');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
});
