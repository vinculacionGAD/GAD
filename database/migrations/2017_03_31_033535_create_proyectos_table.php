<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proyecto', 80);
            $table->string('status', 1);
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->decimal('presupuesto',6,2)->nullable();
            $table->string('moneda', 30);
            $table->string('observacion')->nullable();
            $table->timestamps();            
            $table->integer('organizacion_id')->unsigned();                
            $table->integer('programa_id')->unsigned();
            $table->foreign('organizacion_id')->references('id')->on('organizaciones'); 
            $table->foreign('programa_id')->references('id')->on('programas'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
