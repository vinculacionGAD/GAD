<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('persona_id')->unsigned();                
            $table->integer('vivienda_id')->unsigned();                
            $table->integer('sector_id')->unsigned();                
            $table->foreign('persona_id')->references('id')->on('personas'); 
            $table->foreign('vivienda_id')->references('id')->on('viviendas'); 
            $table->foreign('sector_id')->references('id')->on('sectores'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familias');
    }
}
