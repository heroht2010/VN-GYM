<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pt_model extends Model
{
    //
    protected $table='trainer';
    public $timestamps=false;

    public function account()
    {
        return $this->hasOne('App\dangki_model','user','user');
    }
}
