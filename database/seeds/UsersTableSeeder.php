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
        
        DB::table('users')->insert([
            'name' => "joseAdrian",
            'email' => 'joseadrianpeluko@gmail.com',
            'role_id' => 1,
            'table_id' => null,
            'password' => bcrypt('123456'),
        ]);

        factory(App\User::class, 10)->create();
    }

}
