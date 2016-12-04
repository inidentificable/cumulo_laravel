<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('url_imagen');
            $table->string('link_externo');
            $table->boolean('esta_activo');
            $table->date('fecha_desactiva');
            $table->date('fecha_creacion');
            $table->date('fecha_inicio_provable');
            $table->date('fecha_inicio_real');
            $table->date('fecha_termino_provable');
            $table->date('fecha_termino_real');
            $table->float('tir');
            $table->float('tasa_exigida_pesimista');
            $table->float('tasa_exigida_moderada');
            $table->float('tasa_exigida_optimista');
            $table->float('van');
            $table->float('presupuesto_inicial');
            $table->float('presupuesto_licitado');
            $table->float('presupuesto_aprobado');
            $table->integer('minimo_socios');
            $table->integer('maximo_socios');
            $table->float('capital_minimo_participacion');
            $table->float('capital_maximo_participacion');
            $table->float('porcentaje_minimo_participacion');
            $table->float('porcentaje_maximo_participacion');
            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
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
        Schema::drop('proyectos');
    }
}
