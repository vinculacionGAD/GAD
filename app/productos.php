<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    
    protected $table = "productos";

    protected $fillable = [
    	'producto','fecha_elaboracion','fecha_caducidad','tipo_producto_id'
    ];

    public function stocks(){
    	return $this->hasmany(stocks::class);
    }

    public function tiposProductos(){
    	return $this->belongsto(tipos_productos::class);
    }

    public function detalle(){
    	return $this->hasmany(detalle::class);
    }
}
