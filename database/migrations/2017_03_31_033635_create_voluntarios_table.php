<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trabajo');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->timestamps();
            $table->integer('persona_id')->unsigned();                
            $table->integer('pais_id')->unsigned();                
            $table->integer('organizacion_id')->unsigned();                
            $table->integer('rol_voluntario_id')->unsigned();    
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->foreign('organizacion_id')->references('id')->on('organizaciones');
            $table->foreign('rol_voluntario_id')->references('id')->on('roles_voluntarios');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voluntarios');
    }
}
