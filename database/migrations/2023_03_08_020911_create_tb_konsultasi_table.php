<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_konsultasi', function (Blueprint $table) {
            $table->id('id_konsul');
            $table->string('nama_cust');
            $table->string('umur');
            //$table->string('diagnosa');
            $table->string('keluhan');
            $table->string('pengobatan');
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
        Schema::dropIfExists('tb_konsultasi');
    }
};
