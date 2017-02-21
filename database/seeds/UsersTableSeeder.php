<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => "joseAdrian",
            'email' =>'joseadrianpeluko@gmail.com',
           'role_id' => 1,
            'password' => bcrypt('123456'),
        ]);
       
      factory(App\User::class, 10)->create();
    }
}
