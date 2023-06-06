<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBPKBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_p_k_b_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_polisi');
            $table->foreign('no_polisi')->references('no_polisi')->on('kendaraans')->onDelete('cascade');
            $table->string('nama');
            $table->string('posisi');
            $table->string('approval');
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
        Schema::dropIfExists('b_p_k_b_s');
    }
}