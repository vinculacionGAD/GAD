<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CruzRoja extends Model
{
    protected $table = "cruz_roja";

    protected $fillable = [
    	'n_miembros', 'n_camas', 'n_ambulancias', 'observacion', 'recurso_id'
    ];

    public function recursos(){
    	return $this->belongsto(recursos::class);
    }
}
