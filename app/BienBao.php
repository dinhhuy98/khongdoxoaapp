<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BienBao extends Model
{
    //
    protected $table="bienbao";
    public function loaibienbao(){
    	return $this->belongsTo('App\LoaiBienBao','id_loaibienbao','id');
    }
}
