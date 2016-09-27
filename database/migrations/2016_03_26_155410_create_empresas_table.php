<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('nombre');
            $table->date('fecha_inicio_actividades');
            $table->date('fecha_ingreso_sistema');
            $table->string('telefono');
            $table->string('comuna');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('pais');
            $table->string('clasificacion');
            $table->boolean('invitable');
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
        Schema::drop('empresas');
    }
}
