<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_model extends Model
{
    //
    protected $table='products';
    public $timestamps=false;
    
    public function giohang()
    {
    	return $this->hasMany('App\giohang_mode','id_product','id');
    }

    public function loai()
    {
    	return $this->belongsTo('App\loaisanpham_model','id_product_type','id');
    }
    
}
