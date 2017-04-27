<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discapacidades extends Model
{

	protected $table = "discapacidades";

    protected $fillable = [
		'tipo_discapacidad', 'observacion'
	];

	public function salud(){
    	return $this->hasmany(salud::class);
    }
}
