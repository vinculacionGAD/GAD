<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('n_medicos')->nullable();
            $table->integer('n_enfermeros')->nullable();
            $table->string('observacion')->nullable();
            $table->integer('n_quirofano')->nullable();
            $table->integer('n_camas')->nullable();
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
        Schema::dropIfExists('hospitales');
    }
}
