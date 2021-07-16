<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PengembalianGuru extends Model
{
    protected $table = 'pengembalian_guru';
    protected $primaryKey = 'kode_peminjaman';
    public $incrementing = false;
    public $timestamps = true;

    public function peminjamanRef()
    {
        return $this->hasOne(User::class, 'kode_pengembalian', 'kode_pengembalian');
    }

}
