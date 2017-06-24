<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    
    protected $table = "personas";

    protected $fillable = [
    	'doc_identificacion','nombres','apellido_paterno','apellido_materno','fecha_nacimiento','sexo','correo_electronico','telefono_movil','estado_civil'
    ];

    public function proveedores(){
    	return $this->hasmany(proveedores::class);
    }

    public function voluntarios(){
    	return $this->hasmany(voluntarios::class);
    }

    public function personales(){
    	return $this->hasmany(personales::class);
    }

    public function personasHogares(){
    	return $this->hasmany(personas_hogares::class);
    }

    public function perdidas(){
        return $this->hasmany(perdidas::class);
    }
}
