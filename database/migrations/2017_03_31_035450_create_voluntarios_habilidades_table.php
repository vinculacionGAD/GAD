<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariosHabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntarios_habilidades', function (Blueprint $table) {
            $table->integer('voluntario_id')->unsigned(); 
            $table->integer('habilidad_id')->unsigned();  
            $table->timestamps();
            $table->foreign('voluntario_id')->references('id')->on('voluntarios');
            $table->foreign('habilidad_id')->references('id')->on('habilidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voluntarios_habilidades');
    }
}
