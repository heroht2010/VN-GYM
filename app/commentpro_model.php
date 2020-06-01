<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentpro_model extends Model
{
    //
    protected $table='commentpro';
    public $timestamps=false;

    public function product()
    {
        return $this->hasMany('App\product_model','id','id_product');
    }

    public function customer()
    {
        return $this->belongsTo('App\customer_model','id_user','id');
    }
}
