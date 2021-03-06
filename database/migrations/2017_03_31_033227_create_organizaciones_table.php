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
            $table->string('nombre', 100);
            $table->string('acronimo', 10)->nullable();
            $table->string('tipo_organizacion', 10);
            $table->string('region', 30)->nullable();
            $table->string('telefono', 10);
            $table->string('sitio_web', 45)->nullable();
            $table->string('anio', 4)->nullable();
            $table->string('twitter', 45)->nullable();
            $table->string('logotipo')->nullable();
            $table->string('observacion')->nullable();
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
