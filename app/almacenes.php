<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacenes extends Model
{

	protected $table = "almacenes";

    protected $fillable = ['observacion','recurso_id'];

    public function recursos(){
    	return $this->belongsto(recursos::class);
    }

    public function stocks(){
    	return $this->hasmany(stocks::class);
    }
}
