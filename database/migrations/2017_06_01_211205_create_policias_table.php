<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('n_policias')->nullable();
            $table->integer('n_carros')->nullable();
            $table->integer('n_motos')->nullable();
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
        Schema::dropIfExists('policias');
    }
}
