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
            $table->double('ptc');
            $table->double('ptt');
            $table->double('pv');
            $table->double('ev');
            $table->double('ac')->nullable();
            $table->double('cv')->nullable();
            $table->double('sv')->nullable();
            $table->double('spi')->nullable();
            $table->double('cpi')->nullable();
            $table->double('etc')->nullable();
            $table->double('ecc')->nullable();
            $table->double('ect')->nullable();
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
