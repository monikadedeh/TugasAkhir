<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PeminjamanGuru;
use App\Model\PengembalianGuru;
use App\Model\Buku;
use App\Model\guru;
use App\Model\PengembalianSiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PengembalianController extends Controller
{
    //pengembalian index
    public function pengembalian_guru(){
        $pjguru = PengembalianGuru::all();
        return view('admin.pengembalian_guru.index', compact('pjguru'));
        }

        //form pengembalian guru
        public function formTambah($kode_peminjaman){
            $guru = Guru::all();
            $buku = Buku::all();
            $pinjam = PeminjamanGuru::with('bukuRef', 'guruRef')->find($kode_peminjaman);
            return view('admin.pengembalian_guru.tambah', compact('buku', 'guru', 'pinjam'));
        }
        //tambah pengembalian guru
        public function tambahPengembalian(Request $request){
            $this->validate($request, [
                'kode_pengembalian' => 'required',
                'denda' => 'required',
                'status' => 'required',
                'kode_peminjaman' => 'required',
            ]);

            // $latest =PengembalianGuru::latest()->first();
            // if (!$latest) {
            //     $kode_pengembalian = 'PL-00001';
            // }else{
            //     $string = preg_replace("/[^0-9\.]/", '', $latest->kode_pengembalian);

            //     $kode_pengembalian = 'PL-' . sprintf('%04d', $string+1);
            // }
            $post =  new PengembalianGuru();
            $post->kode_pengembalian = $$request->kode_pengembalian;
            $post->denda = $request->denda;
            $post->status = $request->status;
            $post->kode_peminjaman = $request->kode_peminjaman;
            $post->save();
            return redirect('pengembalian/guru/index');
        }


    //tampil edit
    public function editData($kode_pengembalian){
        $editpengembalian = PengembalianGuru::find($kode_pengembalian);
        // dd($editpengembalian);
        return view('admin.pengembalian_guru.edit', compact('editpengembalian'));

    }
     //proses update
     public function editProses(Request $request, $kode_pengembalian)
     {
         $editpengembalian = PengembalianGuru::find($request->kode_pengembalian);
         $editpengembalian->denda =$request->denda;
         $editpengembalian->save();


         return redirect()->route('pengembalian.guru.index')->with('status', 'Data Berhasil Diedit');
     }

     //hapus data
     public function delete($kode_pengembalian)
     {
         ($kode_pengembalian);
         DB::table('pengembalian_guru')->where('kode_pengembalian', $kode_pengembalian)->delete();

         return redirect()->route('pengembalian.guru.index')->with('status', 'Data Berhasil Dihapus');
     }

     //detail
     public function detail($kode_pengembalian){
         $detail = PengembalianGuru::with('peminjamanRef')->find($kode_pengembalian);
        //   dd($detail);
         return view('admin.pengembalian_guru.detail', compact('detail'));
         }

}
