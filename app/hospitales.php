<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospitales extends Model
{

	protected $table = "hospitales";

    protected $fillable = [
    	'n_medicos', 'n_enfermeros', 'observacion', 'n_quirofano', 'n_camas', 'recurso_id'
    ];

    public function recursos(){
    	return $this->belongsto(recursos::class);
    }
}
