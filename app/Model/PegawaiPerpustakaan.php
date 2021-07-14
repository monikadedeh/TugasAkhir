<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PegawaiPerpustakaan extends Model
{
    protected $table = 'pegawai_perpustakaan';
    protected $fillable = ['nama_pustakawan', 'username', 'password', 'timestamps'];
    protected $hidden = [
        'password',
    ];

}
