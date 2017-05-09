<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class refugios extends Model
{
	
	protected $table = "refugios";

    protected $fillable = [
    	'nombre_contacto','telefono_contacto','capacidad_maxima','poblacion','estado', 'observacion', 'recurso_id'
    ];

    public function encabezado(){
    	return $this->hasmany(encabezado::class);
    }

    public function familias(){
        return $this->hasmany(familias::class);
    }

    public function recursos(){
    	return $this->belongsto(recursos::class);
    }
}
