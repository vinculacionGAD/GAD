<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCruzRojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruz_roja', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('n_miembros')->nullable();
            $table->integer('n_camas')->nullable();
            $table->integer('n_ambulancias')->nullable();
            $table->string('observacion')->nullable();
            $table->integer('recurso_id')->unsigned();                
            $table->foreign('recurso_id')->references('id')->on('recursos');
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
        Schema::dropIfExists('cruz_roja');
    }
}
