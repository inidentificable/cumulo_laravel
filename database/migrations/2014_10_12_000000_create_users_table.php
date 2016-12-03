<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('rut');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('es_emprendedor');
            $table->boolean('es_empresario');
            $table->boolean('es_inversionista');
            $table->boolean('es_incubadora');
            $table->string('url_imagen');
            $table->string('bio');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
