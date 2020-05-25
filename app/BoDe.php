<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoDe extends Model
{
    //
    protected $table="bode";

    public function cauhoi(){
    	return $this->hasMany('App\CauHoi','id_bode','id');
    }
}
