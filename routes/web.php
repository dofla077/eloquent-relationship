<?php

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

use App\User;

Route::get('/', function () {

    /**$user = User::first();

    $post = $user->posts()->create([
        'title' => 'foobar',
        'body' => 'lorem lorem',
    ]);

    $post->tags()->attach(1);**/

    return view('welcome');
});
