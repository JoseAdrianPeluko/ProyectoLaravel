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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    $faker = Faker\Factory::create("es_ES");
    return [
        'role_id' => $faker->randomElement([1, 2, 3]),
        'table_id' => $faker->randomElement([$faker->numberBetween(1, 10), null]),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Role::class, function (Faker\Generator $faker) {

    return [
        'role' => $faker->randomElement(['empleado', 'admin', 'cliente']),
    ];
});
$factory->define(App\Table::class, function (Faker\Generator $faker) {

    return [
        'plazas' => $faker->numberBetween(2, 8),
        'reservado' => $faker->randomElement([true, false]),
    ];
});

