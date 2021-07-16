<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Model\Buku;
use Illuminate\Http\Request;
use App\User;
use App\Model\guru;
use Carbon\Carbon;
use App\Model\PeminjamanSiswa;
use App\Model\PeminjamanGuru;
use Illuminate\Support\Facades\Session;

class PeminjamanController extends Controller
{
     //peminjaman
     public function index($id_buku){
        if(Session::get('is_user') == "1"){
            $akun = User::find(Session::get('id_user'));
        }else{
            $akun = Guru::find(Session::get('id_guru'));
        }

        $buku = Buku::find($id_buku);

        if(!$buku){
            return redirect()->back()->with('failed','Buku tidak ada');
        }

        if($buku->stok == 0){
            return redirect()->back()->with('failed','Buku tidak tersedia');
        }

        return view('landingpage.peminjaman.index', compact('akun', 'id_buku', 'buku'));
    }

    public function simpanPeminjaman(Request $request, $id_buku){
        if(Session::get('is_user') == "1"){
            $latest = PeminjamanSiswa::latest()->first();

            if (!$latest) {
                $kode_peminjaman = 'PL-00001';
            }else{
                $string = preg_replace("/[^0-9\.]/", '', $latest->kode_peminjaman);

                $kode_peminjaman = 'PL-' . sprintf('%04d', $string+1);
            }

            $tgl_selesai = Carbon::now()->addDays($request->durasi);

            $peminjaman = new PeminjamanSiswa();
            $peminjaman->buku_id = $request->id_buku;
            $peminjaman->siswa_id = Session::get('id_user');
            $peminjaman->kode_peminjaman = $kode_peminjaman;
            $peminjaman->durasi = $request->durasi;
            $peminjaman->status = "0";
            $peminjaman->tgl_selesai = $tgl_selesai;
            $peminjaman->save();
        }else{
            $latest = PeminjamanGuru::latest()->first();

            if (!$latest) {
                $kode_peminjaman = 'PL-00001';
            }else{
                $string = preg_replace("/[^0-9\.]/", '', $latest->kode_peminjaman);

                $kode_peminjaman = 'PL-' . sprintf('%04d', $string+1);
            }

            $tgl_selesai = Carbon::now()->addDays($request->durasi);

            $peminjaman = new PeminjamanGuru();
            $peminjaman->buku_id = $request->id_buku;
            $peminjaman->guru_id = Session::get('id_guru');
            $peminjaman->kode_peminjaman = $kode_peminjaman;
            $peminjaman->durasi = $request->durasi;
            $peminjaman->status = "0";
            $peminjaman->tgl_selesai = $tgl_selesai;
            $peminjaman->save();
        }

        if($peminjaman){
            return redirect()->route('landing.histori.index')->with('success','Peminjaman buku berhasil');
        }else{
            return redirect()->back()->with('failed','Peminjaman buku gagal');
        }
    }
}
