<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('account')->group(function () {
    Route::prefix('setting')->group(function() {
        Route::get('/change-password', function () {
            return 'change-password';
        });

        Route::get('/profile', function () {
            return 'profile';
        });

        Route::get('/photo', function () {
            return 'photo';
        });

        Route::get('/delete', function () {
            return 'delete';
        });
    });

    Route::get('follower', function() {
        return 'follower';
    });
});

// Route Alias Name
Route::get('redirect', function() {
    return redirect()->route('homepage');
});

Route::get('home/landing', function() {
    return 'Landing';
})->name('homepage');
