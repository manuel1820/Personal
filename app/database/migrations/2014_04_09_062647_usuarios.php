<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('usuarios', function($tabla) {

            $tabla->increments('id');
            $tabla->string('username', 60);
            $tabla->string('email', 100)->unique();
            $tabla->string('password', 100);
//            $tabla->integer('role_id');
            $tabla->string('role_id');    
            $tabla->date('cita');
            $tabla->string('remember_token', 100);
            $tabla->timestamps();
        });

        DB::table('usuarios')->insert(
                array(
                    'username' => 'manuel',
                    'email' => 'manuel@algo.com',
                    'password' => Hash::make('123'),
                    'role_id'=> 'admin'
                )
        );
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {

        Schema::drop('usuarios');
    }

}
