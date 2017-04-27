<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_instalaciones extends Model
{

	protected $table = "tipos_instalaciones";

	protected $fillable = ['tipo_instalacion'];

    public function recursos(){
    	return $this->hasmany(recursos::class);
    }
}
