<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa', 255);
            $table->string('jenis_kelamin',255)->nullable();
            $table->string('alamat',255)->nullable();
            $table->string('username',255);
            $table->string('password',255);
            $table->string('no_telepon',255)->nullable();
            $table->string('foto',255)->nullable();
            $table->string('email_siswa',255)->nullable();
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
        Schema::dropIfExists('users');
    }
}
