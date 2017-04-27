<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paises extends Model
{

	protected $table = "paises";

    protected $fillable = [
		'nombre_pais', 'codigo'
	];

	public function voluntarios(){
    	return $this->hasmany(voluntarios::class);
    }

    public function organizaciones(){
    	return $this->hasmany(organizaciones::class);
    }
}
