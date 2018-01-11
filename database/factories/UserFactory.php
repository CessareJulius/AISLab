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

// Usuario Administrador -> Ejecutese de Nro 1 de los usuarios

/*$factory->define(App\User::class, function (Faker $faker) {
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
});*/

// Usuario Coordinador -> Ejecutese de Nro 2 de los usuarios

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'role' => 'user',
        'position' => 'coordinador',
        'username' => 'cesc35',
        'email' => 'pedropablooporto@gmail.com',
        'password' => bcrypt('25130266'), // myperson
        'remember_token' => str_random(100),
        'active' => 1,
        'people_id' => 2,
    ];
});

// Persona Administrador -> Ejecutese de Nro 1 de las personas

/*$factory->define(App\People::class, function (Faker $faker) {
	return [
		'dni' => '26026083',
		'name' => 'cessare julius',
		'lastname' => 'yanez gonzalez',
		'phone' => '04144532962',
		'direction' => 'Calle La Victoria, Sector el Jobo, casa #36',
		'type' => 'admin',
	];
});*/


// Persona Coordinador -> Ejecutese de Nro 2 de las personas

$factory->define(App\People::class, function (Faker $faker) {
    return [
        'dni' => '25130266',
        'name' => 'cesar antonio',
        'lastname' => 'padrino navas',
        'phone' => '04243677015',
        'direction' => 'Calle o Sector? (no se! :v) El Dique, casa #(Nunca me dijo, creo que ni el sabe cual es :v)',
        'type' => 'coord',
    ];
});