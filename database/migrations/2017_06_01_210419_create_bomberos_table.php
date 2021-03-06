<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBomberosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bomberos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('n_bomberos')->nullable();
            $table->integer('n_carros')->nullable();
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
        Schema::dropIfExists('bomberos');
    }
}
