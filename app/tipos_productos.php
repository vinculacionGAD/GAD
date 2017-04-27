<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_productos extends Model
{

	protected $table = "tipos_productos";

    protected $fillable = ['tipo_producto'];

    public function productos(){
    	return $this->hasmany(productos::class);
    }
}
