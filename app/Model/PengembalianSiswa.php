<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PengembalianSiswa extends Model
{
    protected $table = 'pengembalian_siswa';
    protected $primaryKey = 'id_pengembalian_siswa';
    public $incrementing = false;
    public $timestamps = true;

    public function peminjamanRef()
    {
        return $this->hasOne(PeminjamanSiswa::class, 'kode_peminjaman', 'kode_peminjaman');
    }

    public function bukuRef()
    {
        return $this->hasOne(Buku::class, 'id', 'nama_buku');
    }

}
