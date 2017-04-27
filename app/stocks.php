<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stocks extends Model
{
	
	protected $table = "stocks";

    protected $fillable = ['producto_id','stock','almacen_id'];

    public function almacenes(){
    	return $this->belongsto(almacenes::class);
    }
}
