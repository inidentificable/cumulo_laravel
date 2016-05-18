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
        Schema::create('licitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('es_privada');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('minimo_ofertas');
            $table->integer('maximo_ofertas');
            $table->float('costo_minimo');
            $table->float('costo_maximo');
            $table->boolean('es_desierta');
            $table->date('fecha_desierta');
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
        Schema::drop('licitacions');

    }
}
