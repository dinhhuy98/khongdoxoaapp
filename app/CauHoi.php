<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    //
    protected $table="cauhoi";

    public function cautraloi(){
    	return $this->hasMany('App\CauTraLoi', 'id_cauhoi', 'id');
    }
}
