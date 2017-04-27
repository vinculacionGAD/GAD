<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class organizaciones extends Model
{

    protected $table = "organizaciones";

    protected $fillable = [
		'nombre', 'acronimo', 'tipo_organizacion', 'region', 'telefono','sitio_web', 'anio', 'twitter', 'logotipo', 'observacion', 'pais_id'
	];

    /*public function setLogotipoAttribute($logotipo){
        if(! empty($logotipo)){
            $name = Carbon::now()->second.$logotipo->getClientOriginalName();
            $this->attributes['logotipo'] = $name;
            \Storage::disk('local')->put($name, \File::get($logotipo));
        }        
    }*/

	public function voluntarios(){
    	return $this->hasmany(voluntarios::class);
    }

    public function proyectos(){
    	return $this->hasmany(proyectos::class);
    }

    public function paises(){
    	return $this->belongsto(paises::class);
    }
}
