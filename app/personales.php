<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personales extends Model
{

	protected $table = "personales";

    protected $fillable = [
		'fecha_inicio', 'fecha_fin', 'persona_id', 'departamento_id'
	];

	public function personas(){
    	return $this->belongsto(personas::class);
    }

    public function departamentos(){
    	return $this->belongsto(departamentos::class);
    }

    public static function Personales(){
		return DB::table('personales')	
			->join('personas','personas.id','=','personales.persona_id')
			->join('departamentos','departamentos.id','=','personales.departamento_id')
			->select('personales.*','personas.nombres','departamentos.departamento')
			->get();
	}
}
