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
            $table->bigInteger('ac')->nullable();
            $table->bigInteger('cv')->nullable();
            $table->bigInteger('sv')->nullable();
            $table->bigInteger('spi')->nullable();
            $table->bigInteger('cpi')->nullable();
            $table->bigInteger('etc')->nullable();
            $table->bigInteger('ecc')->nullable();
            $table->bigInteger('ect')->nullable();
            $table->enum('jangka_proyek', ['pendek', 'panjang'])->nullable();
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
