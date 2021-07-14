<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PeminjamanGuru;
use App\Model\Guru;
use App\Model\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;


class PeminjamanController extends Controller
{
    //peminjaman
    public function pinjam(){
        $pinjam= PeminjamanGuru::with('guruRef', 'bukuRef')->get();
        return view('admin.peminjaman_guru.index', compact('pinjam'));
        }


    //tampil edit
       public function edit($kode_peminjaman){
        $guru = Guru::all();
        $buku = Buku::all();
        $pinjam = PeminjamanGuru::with('bukuRef', 'guruRef')->find($kode_peminjaman);
        return view('admin.peminjaman_guru.edit', compact('pinjam', 'buku','guru'));

    }

    //proses update
    public function update(Request $request, $kode_peminjaman)
    {
        $request->validate([
            'buku_id' => 'required',
            'durasi' => 'required',
            'status' => 'required'
        ]);
        $update = [
            'buku_id' => $request->buku_id,
            'durasi' => $request->durasi,
            'status' => $request->status,
        ];

        $update['buku_id'] = $request->get('buku_id');
        $update['durasi'] = $request->get('durasi');
        $uodate['status'] = $request->get('status');
        PeminjamanGuru::where('kode_peminjaman', $kode_peminjaman)->update($update);
        return redirect()->route('peminjaman.guru.index')->with('alert', 'Data  Berhasil diperbarui');
    }
    //hapus data
    public function delete($kode_peminjaman)
    {
        ($kode_peminjaman);
        DB::table('peminjaman_guru')->where('kode_peminjaman', $kode_peminjaman)->delete();

        return redirect()->route('peminjaman.guru.index')->with('status', 'Data Berhasil Dihapus');
    }

    //detail
    public function detail($kode_peminjaman){
        $detail = PeminjamanGuru::with('guruRef', 'bukuRef')->find($kode_peminjaman);
        return view('admin.peminjaman_guru.detail', compact('detail'));
        }


//     //Tambah
//     public function tambah(){
//         $guru = Guru::all();
//         $buku = Buku::all();
//        return view('admin.peminjaman_guru.tambah', compact('guru', 'buku'));
//    }


     //Proses Tambah
    // public function postTambah(Request $request){
    //     $this->validate($request, [
    //         'buku_id' => 'required',
    //         'guru_id' => 'required',
    //         'durasi' => 'required',
    //         'status' => 'required',
    //     ]);

    //     $post = new PeminjamanGuru();
    //     $post->buku_id = $request->buku_id;
    //     $post->guru_id = $request->guru_id;
    //     $post->kode_peminjaman = Str::random(8);
    //     $post->durasi = $request->durasi;
    //     $post->status = $request->status;
    //     $post->save();
    //     return redirect('/peminjaman/index');
    // }
}
