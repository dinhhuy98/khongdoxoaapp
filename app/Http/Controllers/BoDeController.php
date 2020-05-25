<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoDe;

class BoDeController extends Controller
{
    //
    public function index(){
    	$data = BoDe::find(1)->cauhoi;
    	foreach ($data as $value) {
    		echo $value->noidung."<br>";
    	}
    }
}
