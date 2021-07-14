<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_siswa', function (Blueprint $table) {
            $table->bigInteger('buku_id')->unsigned();
            $table->bigInteger('siswa_id')->unsigned();
            $table->string('kode_peminjaman',10)->primary();
            $table->date('durasi');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('siswa_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_siswa');
    }
}
