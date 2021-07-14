<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_guru', function (Blueprint $table) {
            $table->bigInteger('buku_id')->unsigned();
            $table->bigInteger('guru_id')->unsigned();
            $table->string('kode_peminjaman',10)->primary();
            $table->date('durasi');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_guru');
    }
}
