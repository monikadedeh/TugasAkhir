<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PeminjamanGuru extends Model
{
    protected $table = 'peminjaman_guru';
    protected $primaryKey = 'kode_peminjaman';
    public $incrementing = false;
    public $timestamps = true;

    public function guruRef()
    {
        return $this->hasOne(Guru::class, 'id', 'guru_id');
    }

    public function bukuRef()
    {
        return $this->hasOne(Buku::class, 'id', 'buku_id');
    }

}
