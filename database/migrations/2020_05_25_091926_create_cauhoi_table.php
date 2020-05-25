<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCauhoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cauhoi', function (Blueprint $table) {
            $table->id();
            $table->string('noidung',600);
            $table->string('image',100);
            $table->string('note',300)->nullable();
            $table->unsignedBigInteger('id_bode');
            $table->foreign('id_bode')->references('id')->on('bode');
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
        Schema::dropIfExists('cauhoi');
    }
}
