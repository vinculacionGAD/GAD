<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saluds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('embarazo', 1)->nullable();
            $table->string('enfermedad_cronica', 1);
            $table->string('detalle_enfermedad_cronica')->nullable();
            $table->string('afectacion_desastre', 1);
            $table->string('detalle_afectacion_desastre')->nullable();
            $table->string('observacion')->nullable();
            $table->date('fecha_parto')->nullable();
            $table->timestamps();
            $table->integer('discapacidad_id')->unsigned();                
            $table->foreign('discapacidad_id')->references('id')->on('discapacidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saluds');
    }
}
