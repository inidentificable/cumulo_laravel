<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {

            $table->increments('id');
            $table->dateTimeTz('fecha_creada');
            $table->dateTimeTz('fecha_revisada');
            $table->string('titulo');
            $table->string('detalle');
            $table->string('tipo');
            $table->boolean('revisada');
            $table->string('url_imagen');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actividads');

    }
}