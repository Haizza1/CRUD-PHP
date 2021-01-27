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

Route::get('/', 'UserController@index');
Route::post('users', 'UserController@store')->name('users.store');
Route::put('users/{user}/update', 'UserController@update')->name('users.update');
Route::delete('users/{user}/destroy', 'UserController@destroy')->name('users.destroy');
