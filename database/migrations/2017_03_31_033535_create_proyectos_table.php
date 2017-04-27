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
            $table->string('proyecto');
            $table->string('status');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('presupuesto',6,2);
            $table->string('moneda');
            $table->string('observacion');
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
