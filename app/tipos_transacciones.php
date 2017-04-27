<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_transacciones extends Model
{
	
	protected $table = "tipos_transacciones";

    protected $fillable = [
    	'tipo_transaccion','simbolo'
    ];

    public function encabezado(){
    	return $this->hasmany(encabezado::class);
    }
}
