<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas_hogares extends Model
{
    
    protected $table = "personas_hogares";

    protected $fillable = [
		'parentesco', 'trabaja_si_no', 'persona_id', 'actividad_laboral_id', 'salud_id'
	];

	public function familias(){
    	return $this->hasmany(failias::class);
    }

    public function personas(){
    	return $this->belongsto(personas::class);
    }

    public function salud(){
    	return $this->belongsto(salud::class);
    }

    public function actividadesLaborales(){
    	return $this->belongsto(actividades_labolares::class);
    }
}
