<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCautraloiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cautraloi', function (Blueprint $table) {
            $table->id();
            $table->string('noidung',600);
            $table->boolean('dapandung');
            $table->unsignedBigInteger('id_cauhoi');
            $table->forign('id_cauhoi')->references('id')->on('cauhoi');
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
        Schema::dropIfExists('cautraloi');
    }
}
