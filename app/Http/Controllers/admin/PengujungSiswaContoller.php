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

    //hapus data
    public function delete($id)
    {
        DB::table('data_pengujung_siswa_create')->where('id', $id)->delete();

        return redirect()->route('admin.pengunjung.index')->with('status', 'Data Berhasil Dihapus');
    }
}
