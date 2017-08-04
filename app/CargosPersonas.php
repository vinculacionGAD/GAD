<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargosPersonas extends Model
{
    protected $table = "cargos_personas";

	protected $fillable = [
		'persona_id', 'rol_persona_id'
	];
    
    public function personas(){
    	return $this->belongsto(personas::class);
    }

    public function RolesPersonas(){
    	return $this->belongsto(RolesPersonas::class);
    }
}
