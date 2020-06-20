<?php

use Illuminate\Database\Seeder;

class loaibienbao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loaibienbao')->insert([
        	['name'=>'Biển báo cấm'],
        	['name'=>'Biển báo nguy hiểm'],
        	['name'=>'Biển báo hiệu lệnh'],
        	['name'=>'Biển báo chỉ dẫn'],
        	['name'=>'Biển báo phụ'],
        	['name'=>'Vạch kẻ đường'],
        ]);
    }
}
