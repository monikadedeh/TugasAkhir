<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PengunjungGuru;
use App\PengunjungSiswa;
use Throwable;

class PengujungContoller extends Controller
{
    public function index(){
        $pengunjung= PengunjungGuru::all();
        return view('landingpage.data_pengunjung.index', compact('pengunjung'));
        }


    //proses tambah data
    public function simpanGuru(Request $request)
    {

        try {
                $pengunjung = new PengunjungGuru();
                $pengunjung->nama_lengkap = $request->nama_lengkap;
                $pengunjung->kegiatan = $request->kegiatan;
                $pengunjung->save();
                // dd($pengunjung);
                return redirect()->route('user.pengujung.index')->with('status', 'Berhasil Menambahkan Data ');
            } catch (Throwable $e) {
                return redirect()->route('user.pengujung.index')->with('status', 'Berhasil Menambahkan Data ');
            }
            // dd($request->all());
    }

    //proses tambah data siswa
    public function simpanSiswa(Request $request)
    {

        try {
                $pengunjung = new PengunjungSiswa();
                $pengunjung->nama_lengkap = $request->nama_lengkap;
                $pengunjung->kegiatan = $request->kegiatan;
                $pengunjung->kelas = $request->kelas;
                $pengunjung->save();
                // dd($pengunjung);
                return redirect()->route('user.pengujung.index')->with('status', 'Berhasil Menambahkan Data ');
            } catch (Throwable $e) {
                return redirect()->route('user.pengujung.index')->with('status', 'Berhasil Menambahkan Data ');
            }
            // dd($request->all());
    }

}
