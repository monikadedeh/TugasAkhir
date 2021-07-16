<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Model\Buku;
use App\Model\PeminjamanGuru;
use App\Model\PeminjamanSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class HistoryController extends Controller
{
    //History
    public function index(){
        if(Session::get('is_user')){
            $histori = PeminjamanSiswa::with('bukuRef', 'siswaRef')->where('siswa_id', Session::get('id_user'))->get();
        }else{
            $histori = PeminjamanGuru::with('bukuRef', 'guruRef')->where('guru_id', Session::get('id_guru'))->get();
        }
        return view('landingpage.history.index', compact('histori'));
    }

    //detail history
    public function detail($kd_peminjaman){
        if(Session::get('is_user')){
            $histori = PeminjamanSiswa::with('bukuRef', 'siswaRef')->where('kode_peminjaman', $kd_peminjaman)->where('siswa_id', Session::get('id_user'))->first();
        }else{
            $histori = PeminjamanGuru::with('bukuRef', 'guruRef')->where('kode_peminjaman', $kd_peminjaman)->where('guru_id', Session::get('id_guru'))->first();
        }
        return view('landingpage.history.detail', compact('histori'));
    }
}
