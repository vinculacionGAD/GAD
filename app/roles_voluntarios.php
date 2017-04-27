<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles_voluntarios extends Model
{

	protected $table = "roles_voluntarios";

    protected $fillable = [
		'rol', 'observacion'
	];

	public function voluntarios(){
    	return $this->hasmany(voluntarios::class);
    }
}
