<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{

	protected $table = "proveedores";

    protected $fillable = [
    	'persona_id'
    ];

    public function encabezado(){
    	return $this->hasmany(encabezado::class);
    }

    public function personas(){
    	return $this->belongsto(personas::class);
    }
}
