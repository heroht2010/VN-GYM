<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dangki_model extends Model
{
    //
    protected $table='users';
    public $timestamps=false;
    public function cart()
    {
    	return $this->hasmany('App\giohang_mode','id','id_user');
    }

    public function trainer()
    {
        return $this->hasOne('App\pt_model','user','user');
    }

    public function customer()
    {
        return $this->hasMany('App\response_model','user','user');
    }
    
}
