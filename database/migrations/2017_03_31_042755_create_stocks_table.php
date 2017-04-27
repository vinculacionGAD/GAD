<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->integer('producto_id')->unsigned();                
            $table->decimal('stock',5,2);
            $table->integer('almacen_id')->unsigned();
            $table->timestamps();                            
            $table->foreign('producto_id')->references('id')->on('productos'); 
            $table->foreign('almacen_id')->references('id')->on('almacenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
