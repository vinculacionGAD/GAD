<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle extends Model
{

	protected $table = "detale";

    protected $fillable = [
    	'cantidad','cabecera_id','producto_id'
    ];

    public function productos(){
    	return $this->belongsto(productos::class);
    }

    public function encabezado(){
    	return $this->belongsto(encabezado::class);
    }
}
