<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        factory(App\Table::class, 10)->create();
        factory(App\Product::class, 30)->create();
        factory(App\Order::class, 10)->create();

        DB::table('users')->insert([
            'name' => "JoseAdrian",
            'email' => 'joseadrianpeluko@gmail.com',
            'role_id' => 1,
            'table_id' => null,
            'password' => bcrypt('123456'),
            'address' => "C/ Ermita los Remedios Nº7",
        ]);
        DB::table('users')->insert([
            'name' => "Rebeca",
            'email' => 'rebeca@gmail.com',
            'role_id' => 2,
            'table_id' => null,
            'password' => bcrypt('123456'),
            'address' => "C/ Ermita los Remedios Nº7",
        ]);
        DB::table('users')->insert([
            'name' => "Antonio",
            'email' => 'antonio@gmail.com',
            'role_id' => 3,
            'table_id' => null,
            'password' => bcrypt('123456'),
            'address' => "C/ Ermita los Remedios Nº7",
        ]);

        factory(App\User::class, 10)->create();
    }

}
