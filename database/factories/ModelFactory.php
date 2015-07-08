<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Profesor::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'profesion' => $faker->randomElement($array = array ('ingeniería','matemática','física')),
    ];
});


$factory->define(App\Estudiante::class, function ($faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'carrera' => $faker->randomElement($array = array ('ingeniería','matemática','física')),
    ];
});

$factory->define(App\Curso::class, function ($faker) {
    return [
        'titulo' => $faker->sentence(4),
        'descripcion' => $faker->paragraph(4),
		'valor' => $faker->numberBetween(1,4),
    ];
});
