<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oficinas extends Model
{
	
	protected $table = "oficinas";

    protected $fillable = ['comentario','recurso_id'];

    public function recursos(){
    	return $this->belongsto(recursos::class);
    }
}
