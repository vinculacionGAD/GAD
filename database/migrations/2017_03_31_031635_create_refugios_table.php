<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefugiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refugios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_contacto', 45);
            $table->string('telefono_contacto', 10);
            $table->integer('capacidad_maxima')->nullable();
            $table->integer('poblacion')->nullable();
            $table->string('estado', 20)->nullable();
            $table->string('observacion')->nullable();
            $table->timestamps();
            $table->integer('recurso_id')->unsigned();                
            $table->foreign('recurso_id')->references('id')->on('recursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refugios');
    }
}
