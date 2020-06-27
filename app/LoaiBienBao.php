<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiBienBao extends Model
{
    //
    protected $table="loaibienbao";
    public function bienbao(){
    	return $this->hasMany('App\BienBao','id_loaibienbao','id');
    }
}
