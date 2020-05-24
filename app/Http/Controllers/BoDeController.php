<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoDe;

class BoDeController extends Controller
{
    //
    public function index(){
    	$data = BoDe::all();
    	foreach ($data as $value) {
    		echo $value->name."<br>";
    	}
    }
}
