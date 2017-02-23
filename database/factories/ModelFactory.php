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
        'order_id' => $faker->randomElement([$faker->numberBetween(1, 10), null]),
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
$factory->define(App\Order::class, function (Faker\Generator $faker) {

    return [
        'product_id' => $faker->numberBetween(1, 30),
        'cantidad' => $faker->numberBetween(1, 5),
        'estado' => $faker->randomElement(['pagado', 'preparando', 'listo', 'enviado']),
    ];
});
$factory->define(App\Product::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word,
        'categoria' => $faker->randomElement(['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'fines', 'ofertas']),
        'pvp' => $faker->numberBetween(1, 100),
        'foto' => $faker->randomElement(['http://www.alsuper.com/img/productos-importados-interna01.jpg',
            'http://www.arcacontal.com/media/1661/hm_productos.png',
            'https://www.theinsiders.eu/site/public/images/pl_1//67/201402/103055_27022014_610_siteheader.jpg', 
            'https://www.coviran.es/productos/PublishingImages/productoscoviran_marcapropia.png',
            'http://www.catalogonatura.com.ar/wp-content/uploads/2016/03/productos-natura.jpg'
            ]),
    ];
});

