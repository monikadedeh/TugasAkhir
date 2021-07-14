<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    //pengembalian
    public function pengembalian_guru(){
        return view('admin.pengembalian_guru.index');
        }
    //Tambah
     public function tambah(){
        return view('admin.pengembalian_guru.tambah');
    }
     //edit
     public function edit(){
        return view('admin.pengembalian_guru.edit');
    }
}
