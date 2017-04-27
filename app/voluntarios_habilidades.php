<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voluntarios_habilidades extends Model
{

	protected $table = "voluntarios_habilidades";

    protected $fillable = [
    	'voluntario_id','habilidad_id'
    ];

    public function voluntarios(){
    	return $this->belongsto(voluntarios::class);
    }

    public function habilidades(){
    	return $this->belongsto(habilidades::class);
    }
}
