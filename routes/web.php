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

Route::resource('/', 'BookmarksController')->name('home')

Route::resource('/register', 'RegistrationController')

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::post('/logout', 'SessionsController@destroy')->name('logout');

Route::post('/delete/{bookmark}', 'BookmarksController@deleteConfirm');

Route::get('/home', function() { return redirect('/'); });
