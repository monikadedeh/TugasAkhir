<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengujungSiswaCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengujung_siswa_create', function (Blueprint $table) {
            $table->id();
            $table->char('nama_lengkap', 255);
            $table->string('kelas',255);
            $table->string('kegiatan',255);
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
        Schema::dropIfExists('data_pengujung_siswa_create');
    }
}
