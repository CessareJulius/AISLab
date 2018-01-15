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

//Auth::usersRoutes();

//Auth::peopleRoutes();

Route::group(['middleware' => ['auth']], function() {

	Route::get('profile/{id}', 'UsersController@show')->name('users.profile');
    Route::resource('users', 'UsersController');
});

Route::group(['middleware' => ['auth']], function() {

	Route::get('people_list/{type}', 'PeopleController@indexType')->name('people.type');
	Route::resource('people', 'PeopleController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

