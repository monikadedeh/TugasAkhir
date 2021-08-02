<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PeminjamanSiswa;
use App\Model\PengembalianSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(){
        $lap = PengembalianSiswa::with('peminjamanRef', 'peminjamanRef.siswaRef','bukuRef')->get();
        return view('admin.laporan.index', compact('lap'));
    }

}
