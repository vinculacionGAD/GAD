<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectores extends Model
{
	protected $table = "sectores";

    protected $fillable = [
		'sector', 'abreviatura', 'ubicacion', 'observacion', 'latitud','longitud', 'comunidad_id'
	];

	public function familias(){
    	return $this->hasmany(familias::class);
    }

    public function comunidades(){
    	return $this->belongsto(comunidades::class);
    }
}
