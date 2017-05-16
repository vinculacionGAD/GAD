<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sector', 45);
            $table->string('abreviatura', 5);
            $table->string('ubicacion', 45);
            $table->string('observacion');
            $table->string('latitud', 50);
            $table->string('longitud', 50);
            $table->timestamps();
            $table->integer('comunidad_id')->unsigned();                
            $table->foreign('comunidad_id')->references('id')->on('comunidades'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectores');
    }
}
