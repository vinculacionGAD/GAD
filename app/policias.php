<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class policias extends Model
{
    protected $table = "policias";

    protected $fillable = [
    	'n_policias', 'n_carros', 'n_motos', 'observacion', 'recurso_id'
    ];

    public function recursos(){
    	return $this->belongsto(recursos::class);
    }
}
