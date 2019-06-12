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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts','PostController');
Route::get('/login/{social}'.'Auth\LoginController@socialLogin')
        ->where('social','twiter|facebook|linkedin|google|github');
Route::get('/login/{social/callback}'.'Auth\LoginController@handleProviderCallback')
        ->where('social','twiter|facebook|linkedin|google|github');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/search', 'PostController@search');
// Route::get('/posts', 'postcontroller@index');
// Route::get('/posts/create','postcontroller@create');
// Route::post('/posts','postcontroller@store');
// Route::get('/posts/{id}', 'postcontroller@show');
// Route::get('/posts/{id}/edit', 'postcontroller@edit');
// Route::patch('/posts/{id}', 'postcontroller@update');
// Route::delete('/posts/{id}', 'postcontroller@destroy');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
