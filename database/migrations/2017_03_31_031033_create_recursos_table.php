<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_recurso', 100);
            $table->string('direccion', 80);
            $table->string('telefono', 10);
            $table->string('latitud', 45);
            $table->string('longitud', 45);
            $table->string('correo', 30);
            $table->timestamps();
            $table->integer('tipo_instalacion_id')->unsigned();                
            $table->foreign('tipo_instalacion_id')->references('id')->on('tipos_instalaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recursos');
    }
}
