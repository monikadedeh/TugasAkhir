<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengembaliansiswaController extends Controller
{
    //pengembalian siswa
    public function pengembalian_siswa(){
        return view('admin.pengembalian_siswa.index');
        }
    //Tambah siswa
     public function tambah(){
        return view('admin.pengembalian_siswa.tambah');
    }
     //edit siswa
     public function edit(){
        return view('admin.pengembalian_siswa.edit');
    }
}
