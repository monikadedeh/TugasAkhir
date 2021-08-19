<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PeminjamanSiswa;
use Illuminate\Http\Request;

class LaporanPeminjamanController extends Controller
{
    public function index(){
        $lap = PeminjamanSiswa::with('pengembalianRef', 'siswaRef','bukuRef')->where('status', 0)->get();
        return view('admin.laporan_peminjaman.index', compact('lap'));
    }

}
