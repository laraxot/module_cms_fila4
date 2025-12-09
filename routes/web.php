<?php

declare(strict_types=1);
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
use Illuminate\Support\Facades\Route;

// use Modules\Cms\Http\Controllers\PageController;
/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
 * Route::get('/{lang?}/{container0?}/{item0?}/{container1?}/{item1?}/{container2?}/{item2?}', '\\'.Welcome::class)->name('test');
 * Route::get('/', '\\'.Home::class)->name('home');
 */
// Route::get('/{container0}/{item0?}/{container1?}/{item1?}/{container2?}/{item2?}', PageController::class);

Route::get(
    '/',
    fn () => // return view('welcome');
        redirect('/'.app()->getLocale()),
);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
Route::get('/{lang?}/{container0?}/{item0?}/{container1?}/{item1?}/{container2?}/{item2?}', '\\'.Welcome::class)->name('test');
Route::get('/', '\\'.Home::class)->name('home');
*/
// Route::get('/{container0}/{item0?}/{container1?}/{item1?}/{container2?}/{item2?}', PageController::class);

Route::get('/', fn () =>
    // return view('welcome');
    redirect('/'.app()->getLocale()));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
 * Route::get('/{lang?}/{container0?}/{item0?}/{container1?}/{item1?}/{container2?}/{item2?}', '\\'.Welcome::class)->name('test');
 * Route::get('/', '\\'.Home::class)->name('home');
 */
// Route::get('/{container0}/{item0?}/{container1?}/{item1?}/{container2?}/{item2?}', PageController::class);

Route::get(
    '/',
    fn() => (
        // return view('welcome');
        redirect('/' . app()->getLocale())
    ),
);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
