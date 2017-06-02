<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntos_encuentro extends Model
{
    protected $table = "puntos_encuentro";

    protected $fillable = [
    	'latitud', 'longitud'
    ];
}
