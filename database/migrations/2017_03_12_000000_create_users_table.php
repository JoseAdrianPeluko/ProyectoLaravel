<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //     $table->dropForeign('role_id'); 
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->integer('table_id')->unsigned()->nullable();
            $table->foreign('table_id')->references('id')->on('tables')->onDelete('set null');
            $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');
            $table->string('name');
//            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
//            $table->string('address');
//            $table->string('pedido');


            $table->rememberToken();
            $table->timestamps();
        });
//        2014_10_12_000000_create_users_table
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() { 
        Schema::dropIfExists('users');
    }
}
