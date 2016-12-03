<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaGrupoPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_grupo', function (Blueprint $table) {
            $table->integer('empresa_id')->unsigned()->index();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->integer('grupo_id')->unsigned()->index();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['empresa_id', 'grupo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresa_grupo');
    }
}
