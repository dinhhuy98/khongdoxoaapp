<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienbaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienbao', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('sohieu',100);
            $table->string('mota',600);
            $table->string('image',100);
            $table->unsignedBigInteger('id_loaibienbao');
            $table->foreign('id_loaibienbao')->references('id')->on('loaibienbao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bienbao');
    }
}
