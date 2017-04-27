<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
	
	protected $table = "proyectos";

    protected $fillable = [
		'proyecto', 'status', 'fecha_inicio', 'fecha_fin', 'presupuesto','moneda', 'observacion', 'organizacion_id', 'programa_id'
	];

	public function organizaciones(){
    	return $this->belongsto(organizaciones::class);
    }

    public function programas(){
    	return $this->belongsto(programas::class);
    }
}
