<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('roles')->insert([
            'role' => "admin",
        ]);
        DB::table('roles')->insert([
            'role' => "empleado",
        ]);
        DB::table('roles')->insert([
            'role' => "cliente",
        ]);
//        factory(App\Role::class, 3)->create();
    }

}
