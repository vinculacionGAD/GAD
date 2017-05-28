<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncabezadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encabezados', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('observacion')->nullable();
            $table->date('fecha_registro');
            $table->timestamps();
            $table->integer('tipo_transaccion_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();
            $table->integer('refugio_id')->unsigned();
            $table->foreign('tipo_transaccion_id')->references('id')->on('tipos_transacciones');
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreign('refugio_id')->references('id')->on('refugios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encabezados');
    }
}
