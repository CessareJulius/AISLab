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

Route::get('users', 'UsersController@index')->middleware('auth');

Route::get('users/home', 'UsersController@home')->middleware('auth');

Route::get('users/add', 'UsersController@add')->middleware('auth');

Route::get('users/view/{id}', 'UsersController@view')->where('id', '[0-9]+')->middleware('auth');

Route::get('users/profile/{id}', 'UsersController@view')->where('id', '[0-9]+')->middleware('auth');

Route::get('users/edit/{id}', 'UsersController@edit')->where('id', '[0-9]+')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
