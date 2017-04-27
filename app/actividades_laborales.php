<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividades_laborales extends Model
{

	protected $table = "actividades_laborales";

	protected $fillable = ['actividad_laboral'];

	public function personasHogares(){
    	return $this->hasmany(personas_hogares::class);
    }
}
