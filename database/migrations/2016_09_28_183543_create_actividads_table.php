<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {

            $table->increments('id');
            $table->dateTimeTz('inicio');
            $table->dateTimeTz('termino');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('comuna');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('pais');
            $table->string('clasificacion');
            $table->boolean('pendiente');

            $table->timestamps();

            //Para mantener la integridad de referencia en la base de datos (un usuario puede tener muchas actividades)
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actividades');

    }
}