<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PeminjamanGuru;
use App\Model\PengembalianGuru;
use App\User;
use Illuminate\Http\Request;



class PengembalianController extends Controller
{
    //pengembalian index
    public function pengembalian_guru(){
        $pjguru = PengembalianGuru::with('peminjamanRef')->get();
        return view('admin.pengembalian_guru.index', compact('pjguru'));
        }

     //tampil edit
     public function edit($kode_pengembalian){
        $pjguru = PengembalianGuru::find($kode_pengembalian);
        return view('admin.pengembalian_guru.index', compact('pjguru'));
        }

        //proses edit
     public function editProses(Request $request, $kode_pengembalian){
        $pjguru = PeminjamanGuru::find($request->kode_pengembalian);
        $pjguru->status = $request->status;
        $pjguru->save();
         return redirect()->route('pengembalian.guru.index')->with('status', 'Data Berhasil Diedit');
    }

}
