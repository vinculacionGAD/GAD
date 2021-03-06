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

    public function bomberos(){
        return $this->hasmany(bomberos::class);
    }

    public function policias(){
        return $this->hasmany(policias::class);
    }

    public function marina(){
        return $this->hasmany(marina::class);
    }

    public function CruzRoja(){
        return $this->hasmany(marina::CruzRoja);
    }

    public function tiposIntalaciones(){
    	return $this->belongsto(tipos_instalacion::class);
    }
}
