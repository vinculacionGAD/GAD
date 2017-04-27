<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comunidades extends Model
{

	protected $table = "comunidades";

    protected $fillable = [
		'comunidad', 'observacion'
	];

	public function sectores(){
    	return $this->hasmany(sectores::class);
    }
}
