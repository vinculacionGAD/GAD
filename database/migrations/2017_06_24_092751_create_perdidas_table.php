<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerdidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perdidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion'); 
            $table->decimal('monto_estimado',6,2)->nullable(); 
            $table->date('fecha_perdida');                                                
            $table->timestamps();
            $table->integer('persona_id')->unsigned();  
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perdidas');
    }
}
