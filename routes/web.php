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

// Route::resource('posts', 'PostController');
// Route::resource('posts', 'PostaaaController');
// Route::get('posts_001', 'PostaaaController@index')->name('posts_0001');
// Route::get('posts_001', 'PostaaaController@index');
// Route::get('posts_001/create', 'PostaaaController@create');
// Route::post('posts_001', 'PostaaaController@store');
// Route::get('posts_001/{post}', 'PostaaaController@show')->name('posts_001.show');
// Route::get('posts_001/{post}/edit', 'PostaaaController@edit');
// Route::post('posts_001_update/{post}', 'PostaaaController@update');
// Route::post('posts_001_delete/{post}', 'PostaaaController@destroy');
Route::get('car', 'CarController@index');
Route::get('car/create', 'CarController@create');
Route::post('car', 'CarController@store');
Route::get('car/{car}', 'CarController@show')->name('car.show');
Route::get('car/{car}/edit', 'CarController@edit');
Route::post('car_update/{car}', 'CarController@update');
Route::post('car_delete/{car}', 'CarController@destroy');

// if (env('APP_ENV') === 'local') {
//    URL::forceScheme('https');
// }

// ->name(posts.show);
