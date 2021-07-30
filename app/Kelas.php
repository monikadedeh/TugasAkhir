<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $timestamps = true;

    public function kelasRef()
    {
        return $this->belongsTo(User::class, 'id_kelas', 'id_kelas');
    }
}
