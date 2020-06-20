<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BoDe;
use App\CauHoi;
use App\CauTraLoi;

class BoDeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return BoDe::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = BoDe::find($id);
        $data->cauhoi = BoDe::find($id)->cauhoi;
        foreach ($data->cauhoi as $cauhoi) {
            $cauhoi->cautraloi = CauHoi::find($cauhoi->id)->cautraloi;
            $trueArr = [];
            $i=1;
            foreach ($cauhoi->cautraloi as $value) {
                if($value->dapandung=="true")
                    $trueArr[]=$i;
                $i++;
            }
            $cauhoi['dapandung'] = implode(",", $trueArr);
        }
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function capnhat(){
        $cautraloi = CauTraLoi::where('id',1)->update(['dapandung'=>true]);
        $cautraloi2 = CauTraLoi::where('id',10)->update(['dapandung'=>true]);
        //$cautraloi->save();

    }
}
