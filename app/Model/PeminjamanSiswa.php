<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;


class PeminjamanSiswa extends Model
{
    protected $table = 'peminjaman_siswa';
    protected $primaryKey = 'kode_peminjaman';
    public $incrementing = false;
    public $timestamps = true;

    public function siswaRef()
    {
        return $this->hasOne(User::class, 'id', 'siswa_id');
    }

    public function bukuRef()
    {
        return $this->hasOne(Buku::class, 'id', 'buku_id');
    }
    public function pengembalianRef()
    {
        return $this->belongsTo(PengembalianSiswa::class, 'kode_peminjaman', 'kode_peminjaman');
    }
}
