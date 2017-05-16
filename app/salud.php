<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salud extends Model
{

	protected $table = "saluds";

    protected $fillable = [
		'embarazo', 'enfermedad_cronica', 'detalle_enfermedad_cronica', 'afectacion_desastre', 'detalle_afectacion_desastre', 'observacion','discapacidad_id', 'fecha_parto'
	];

	public function personasHogares(){
    	return $this->hasmany(personas_hogares::class);
    }

    public function discapacidades(){
    	return $this->belongsto(discapacidades::class);
    }
}
