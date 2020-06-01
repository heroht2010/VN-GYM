<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giohang_mode extends Model
{
    //
    protected $table='cart';
    public $timestamps=false;
    public function product()
    {
    	return $this->hasMany('App\product_model','id','id_product');
    }
}
