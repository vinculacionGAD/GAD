<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perdidas extends Model
{
    protected $table = "perdidas";

    protected $fillable = [
		'descripcion', 'fecha_perdida', 'monto_estimado', 'persona_id'
	];

	public function personas(){
    	return $this->belongsto(personas::class);
    }
}
