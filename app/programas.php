<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programas extends Model
{

	protected $table = "programas";

    protected $fillable = [
		'programa', 'observacion'
	];

	public function programas(){
    	return $this->hasmany(programas::class);
    }
}
