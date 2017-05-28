<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doc_identificacion', 13);
            $table->string('nombres', 30);
            $table->string('apellido_paterno', 20);
            $table->string('apellido_materno', 20)->nullable();
            $table->date('fecha_nacimiento');
            $table->string('sexo', 1);
            $table->string('correo_electronico', 45)->nullable();
            $table->string('telefono_movil', 10)->nullable();
            $table->timestamps();
            $table->string('estado_civil', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
