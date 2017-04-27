<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voluntarios extends Model
{
    
    protected $table = "voluntarios";

    protected $fillable = [
    	'trabajo','fecha_inicio','fecha_fin','persona_id','pais_id','organizacion_id','rol_voluntario_id'
    ];

    public function rolesVoluntarios(){
    	return $this->belongsto(roles_voluntarios::class);
    }

    public function organizaciones(){
    	return $this->belongsto(organizaciones::class);
    }

    public function paises(){
    	return $this->belongsto(paises::class);
    }

    public function voluntariosHabilidades(){
    	return $this->hasmany(voluntarios_habilidades::class);
    }
}
