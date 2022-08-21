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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_proyek');
            $table->bigInteger('ptc');
            $table->bigInteger('ptt');
            $table->bigInteger('pv');
            $table->bigInteger('ev');
            $table->bigInteger('ac');
            $table->bigInteger('cv');
            $table->bigInteger('sv');
            $table->bigInteger('spi');
            $table->bigInteger('cpi');
            $table->bigInteger('etc');
            $table->bigInteger('ecc');
            $table->bigInteger('ect');
            $table->enum('jangka_proyek', ['pendek', 'panjang']);
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
        Schema::dropIfExists('proyek');
    }
};
