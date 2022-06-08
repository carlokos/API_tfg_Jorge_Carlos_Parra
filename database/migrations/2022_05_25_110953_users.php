<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Con la migraciones se crea la base de datos a partir de un comando de artisan,
 * timestamps se usa para registrar automaticamente cuando se creo o modifico la tabla
 * y tambien hay que poner esos datos en el modelo para guardarlos correctamente
 */
class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('Id')->unsigned();
            $table->string('Name', 50);
            $table->string('Subname',50);
            $table->integer('Telf');
            $table->string('Email',100)->unique();
            $table->string('Password', 255);
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
        //
    }
}
