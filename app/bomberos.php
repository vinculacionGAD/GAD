<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bomberos extends Model
{
    protected $table = "bomberos";

    protected $fillable = [
    	'n_bomberos', 'n_carros', 'observacion', 'recurso_id'
    ];

    public function recursos(){
    	return $this->belongsto(recursos::class);
    }
}
