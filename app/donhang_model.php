<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang_model extends Model
{
    //
    protected $table='madonhang';
    public $timestamps=false;
    
        public function detaildonhang()
    {
        return $this->hasMany('App\donhangdetail_model','madh','madh');
    }
    
    public function product()
    {
        return $this->hasMany('App\product_model','id','id_product');
    }
    
    public function customer()
    {
        return $this->hasMany('App\customer_model','id','id_user');
    }

    
    
}
