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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/guide', function () {
    return view('guide');
});

Route::get('/show', function () {
    return view('show');
});


Auth::routes();

Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');

Route::resource('posts', 'PostController');
Route::resource('/users', 'UsersController', ['only' => ['show']]);
Route::resource('comments', 'CommentController');