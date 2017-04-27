<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class habilidades extends Model
{
	
	protected $table = "habilidades";

    protected $fillable = [
		'habilidad', 'observacion'
	];

	public function voluntarios_habilidades(){
    	return $this->hasmany(voluntarios_habilidades::class);
    }
}
