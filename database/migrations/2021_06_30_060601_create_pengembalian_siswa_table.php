<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian_siswa', function (Blueprint $table) {
            $table->string('kode_pengembalian',10)->primary();
            $table->string('denda',255);
            $table->boolean('status');
            $table->string('kode_peminjaman',10);
            $table->timestamps();

            $table->foreign('kode_peminjaman')->references('kode_peminjaman')->on('peminjaman_siswa')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian_siswa');
    }
}
