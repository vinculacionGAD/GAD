<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesPersonas extends Model
{
    protected $table = "roles_personas";

	protected $fillable = ['nombre_rol'];

    public function cargosPersonas(){
    	return $this->hasmany(cargosPersonas::class);
    }
}
