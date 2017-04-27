<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('acronimo');
            $table->string('tipo_organizacion');
            $table->string('region');
            $table->string('telefono');
            $table->string('sitio_web');
            $table->string('anio');
            $table->string('twitter');
            $table->string('logotipo');
            $table->string('observacion');
            $table->timestamps();
            $table->integer('pais_id')->unsigned();                
            $table->foreign('pais_id')->references('id')->on('paises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizaciones');
    }
}
