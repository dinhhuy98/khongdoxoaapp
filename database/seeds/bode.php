<?php

use Illuminate\Database\Seeder;

class bode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bode')->insert([
        	['name'=>"Bộ đề 1"],
        	['name'=>"Bộ đề 2"],
        	['name'=>"Bộ đề 3"],
        	['name'=>"Bộ đề 4"],
        	['name'=>"Bộ đề 5"],
        	['name'=>"Bộ đề 6"],
        	['name'=>"Bộ đề 7"],
        	['name'=>"Bộ đề 8"]
        ]);
    }
}
