<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamentos extends Model
{

	protected $table = "departamentos";

    protected $fillable = [
		'departamento', 'observacion'
	];

	public function personales(){
    	return $this->hasmany(personales::class);
    }
}
