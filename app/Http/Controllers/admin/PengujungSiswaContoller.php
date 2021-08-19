<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\PengunjungSiswa;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PengujungSiswaContoller extends Controller
{
    ////Index Pengunjung guru
    public function index(){
        $pengunjung= PengunjungSiswa::all();
        return view('admin.data_pengunjung_siswa.index', compact('pengunjung'));
        }

     //Tampil Detail
     public function detail($id){
        $siswadetail= DB::table('data_pengujung_siswa_create')->where('id', $id)->first();
        return view('admin.data_pengunjung_siswa.detail', compact('siswadetail'));
        }
}
