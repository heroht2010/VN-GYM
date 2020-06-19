<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhangdetail_model extends Model
{
    //
    protected $table='donhang';
    public $timestamps=false;

    public function donhang()
    {
        return $this->hasOne('App\donhang_model','madh','madh');
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

