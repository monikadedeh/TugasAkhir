<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\KategoriBuku;

class Buku extends Model
{
    protected $table = 'buku';
    public $timestamps = true;

    public function kategoriRef()
    {
        return $this->hasOne(KategoriBuku::class, 'id', 'kategori_id');
    }
}
