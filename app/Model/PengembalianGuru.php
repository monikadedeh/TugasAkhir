<?php

namespace App\Model;
use App\Model\PeminjamanGuru;

use Illuminate\Database\Eloquent\Model;

class PengembalianGuru extends Model
{
    protected $table = 'pengembalian_guru';
    protected $primaryKey = 'kode_pengembalian';
    public $incrementing = false;
    public $timestamps = true;

    public function peminjamanRef()
    {
        return $this->hasOne(PeminjamanGuru::class, 'kode_peminjaman', 'kode_peminjaman');
    }
    public function guruRef()
    {
        return $this->hasOne(Guru::class, 'id', 'nama_guru');
    }
    public function bukuRef()
    {
        return $this->hasOne(Buku::class, 'id', 'nama_buku');
    }
}
