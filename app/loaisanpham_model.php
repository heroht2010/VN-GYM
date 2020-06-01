<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham_model extends Model
{
    //
    protected $table='loaisanpham';

    public function product()
    {
    	return $this->hasMany('App\product_model','id_product_type','id');
    }
    
}
