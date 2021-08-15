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

// Parameter
Route::get('/user/{id}', function ($id) {
    return 'User ' . $id;
});

// Parameter Optional
Route::get('/profile/{id?}', function ($id = null) {
    return 'Profile ' . $id;
});
