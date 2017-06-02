<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marina extends Model
{
    protected $table = "marina";

    protected $fillable = [
    	'n_botes', 'n_personas', 'observacion', 'recurso_id'
    ];

    public function recursos(){
    	return $this->belongsto(recursos::class);
    }
}
