<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Aqui creamos nuestra tabla de la BD, 
         * con timestamps ponemos cuando fue creada y modificada
         * y con softdeletes podemos restaurar los datos borrados
         * todo esto tambien lo tiene que tener la clase que se use de modelo
         */
        Schema::create('bookings', function (Blueprint $table){
            $table->Increments('Id')->unsigned();
            $table->unsignedInteger('Pass_Id');
            $table->date('Session_date');
            $table->Integer('Num_people');
            $table->float('Price', 4, 2);
            $table->char('Prepaid', 1);
            $table->unsignedInteger('User_Id');
            $table->unsignedInteger('Service_Id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('Pass_Id')->references('Id')->on('passes');
            $table->foreign('User_Id')->references('Id')->on('users');
            $table->foreign('Service_Id')->references('Id')->on('services');

            $table->unique(['User_Id', 'Session_date']);
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
