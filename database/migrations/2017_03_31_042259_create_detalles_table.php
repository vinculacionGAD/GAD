<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cantidad', 6, 2);
            $table->timestamps();
            $table->integer('encabezado_id')->unsigned();
            $table->integer('tipo_transaccion_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->foreign('encabezado_id')->references('id')->on('encabezados');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('tipo_transaccion_id')->references('tipo_transaccion_id')->on('encabezados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles');
    }
}
