<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trabajador extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('trabajador', function($tabla) {

            $tabla->increments('id');
//            $tabla->integer('trabajador_id');
//            $tabla->integer('pago_id');
            $tabla->string('nombre', 60);
            $tabla->string('apellido', 60);
            $tabla->integer('cedula');
            $tabla->string('telefono', 60);
            $tabla->string('email', 100)->unique();
            $tabla->string('profesion', 60);
            $tabla->date('nacimiento');
            $tabla->date('ingreso');

            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('trabajador');
    }

}
