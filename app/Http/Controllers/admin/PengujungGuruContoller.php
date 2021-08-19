<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\PengunjungGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengujungGuruContoller extends Controller
{
    //Index Pengunjung guru
    public function index(){
        $pengunjung= PengunjungGuru::all();
        return view('admin.data_pengunjung_guru.index', compact('pengunjung'));
        }

     //Tampil Detail
     public function detail($id){
        $gurudetail= DB::table('data_pengujung_guru_create')->where('id', $id)->first();
        return view('admin.data_pengunjung_guru.detail', compact('gurudetail'));
        }
}

