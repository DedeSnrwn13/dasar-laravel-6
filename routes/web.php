<?php

use App\Post;
use Faker\Factory;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/seed', function(Post $post) {
    $faker = Factory::create();

    foreach (range(1,100) as $x) {
        $post->create([
            'title' => $faker->sentence(5),
            'content' => $faker->sentence(30)
        ]);
    }
});

