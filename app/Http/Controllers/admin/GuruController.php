<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;




class GuruController extends Controller
{
    //Tampil index Guru
    public function index(){
        $guru= Guru::all();
        return view('admin.guru.index ',compact('guru'));
    }

    //Tampil Detail
    public function detail($id){
        $guru= DB::table('guru')->where('id', $id)->first();
        return view('admin.guru.detail', compact('guru'));
        }

     //Hapus data guru
     public function delete($id)
     {
         DB::table('guru')->where('id', $id)->delete();

         return redirect()->route('guru.index')->with('status', 'Data Berhasil Dihapus');
     }
}
