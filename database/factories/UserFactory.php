<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'role' => 'admin',
        'position' => 'admin',
        'username' => 'cjulius',
        'email' => 'djcsarjulio1997@gmail.com',
        'password' => bcrypt('cesar20149'), // myperson
        'remember_token' => str_random(10),
        'active' => 1,
        'people_id' => 1,
    ];
});

$factory->define(App\People::class, function (Faker $faker) {
	return [
		'dni' => '26026083',
		'name' => 'cessare julius',
		'lastname' => 'yanez gonzalez',
		'phone' => '04144532962',
		'direction' => 'Calle La Victoria, Sector el Jobo, casa #36',
		'type' => 'admin',
	];
});
