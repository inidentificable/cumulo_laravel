<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaEmpresaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_empresa', function (Blueprint $table) {
            $table->integer('invita_id')->unsigned()->index();
            $table->foreign('invita_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->integer('invitado_id')->unsigned()->index();
            $table->foreign('invitado_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->string('mensaje');
            $table->string('respuesta');
            $table->boolean('resultado');
            $table->timestamps();
            $table->primary(['invita_id', 'invitado_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresa_empresa');
    }
}
