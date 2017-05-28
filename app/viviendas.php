<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viviendas extends Model
{
	protected $table = "viviendas";

    protected $fillable = [
		'tipo_construccion', 'anios_vida', 'ubicacion', 'latitud', 'longitud', 'imagen'
	];

	public function familias(){
    	return $this->hasmany(familias::class);
    }
}
