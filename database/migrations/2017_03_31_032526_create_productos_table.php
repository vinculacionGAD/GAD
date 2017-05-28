<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producto', 100);
            $table->date('fecha_elaboracion')->nullable();
            $table->date('fecha_caducidad')->nullable();
            $table->timestamps();
            $table->integer('tipo_producto_id')->unsigned();                
            $table->foreign('tipo_producto_id')->references('id')->on('tipos_productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
