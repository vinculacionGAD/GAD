<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class encabezado extends Model
{

    protected $table = "encabezado";

    protected $fillable = [
    	'fecha_registro','observacion','tipo_transaccion_id','proveedor_id','refugio_id'
    ];

    public function detalle(){
    	return $this->hasmany(detalle::class);
    }

    public function refugios(){
    	return $this->belongsto(refugios::class);
    }

    public function tiposTransacciones(){
    	return $this->belongsto(tipos_transacciones::class);
    }

    public function proveedores(){
    	return $this->belongsto(proveedores::class);
    }
}
