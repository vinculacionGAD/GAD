<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasHogaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas_hogares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parentesco', 45);
            $table->string('trabaja_si_no', 1);
            $table->timestamps();
            $table->integer('persona_id')->unsigned();                
            $table->integer('actividad_laboral_id')->unsigned();                
            $table->integer('salud_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('actividad_laboral_id')->references('id')->on('actividades_laborales');
            $table->foreign('salud_id')->references('id')->on('saluds');                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas_hogares');
    }
}
