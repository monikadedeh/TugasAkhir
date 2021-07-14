<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiPerpustakaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_perpustakaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pustakawan', 255);
            $table->string('jenis_kelamin', 255)->nullable();
            $table->string('alamat',255)->nullable();
            $table->string('username',255);
            $table->string('password',255);
            $table->string('no_telepon',255)->nullable();
            $table->string('foto',255)->nullable();
            $table->string('email_perpusatkawaan',255)->nullable();
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
        Schema::dropIfExists('pegawai_perpustakaan');
    }
}
