<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_id')->unsigned();
            $table->string('nama_buku', 255);
            $table->string('penerbit',255);
            $table->string('prnulis',255);
            $table->string('deskripsi',255);
            $table->string('tahun',255);
            $table->int('stok');
            $table->string('foto',255)->nullable();
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori_buku')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
