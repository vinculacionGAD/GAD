<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familias extends Model
{

    protected $table = "familias";

    protected $fillable = [
		'persona_hogar_id', 'vivienda_id', 'sector_id', 'refugio_id', 'jefe_hogar'
	];

	public function personasHogares(){
    	return $this->belongsto(personas_hogares::class);
    }

    public function sectores(){
    	return $this->belongsto(sectores::class);
    }

    public function viviendas(){
    	return $this->belongsto(viviendas::class);
    }

    public function refugios(){
        return $this->belongsto(refugios::class);
    }
}
