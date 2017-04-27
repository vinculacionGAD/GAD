<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recursos extends Model
{
    
    protected $table = "recursos";

	protected $fillable = [
		'nombre_recurso', 'direccion', 'telefono', 'latitud', 'longitud','correo', 'tipo_instalacion_id'
	];

    public function hospitales(){
    	return $this->hasmany(hospitales::class);
    }

    public function oficinas(){
    	return $this->hasmany(oficinas::class);
    }

    public function almacenes(){
    	return $this->hasmany(almacenes::class);
    }

    public function refugios(){
        return $this->hasmany(refugios::class);
    }

    public function tiposIntalaciones(){
    	return $this->belongsto(tipos_instalacion::class);
    }
}
