<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PeminjamanGuru;
use App\Model\Guru;
use App\Model\Buku;
use App\Model\PengembalianGuru;
use App\User;
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
    $guru = User::all();
    $buku = Buku::all();
    $pinjam = PeminjamanGuru::with('bukuRef', 'guruRef')->find($kode_peminjaman);
    return view('admin.peminjaman_guru.edit', compact('pinjam', 'buku','guru'));

}

//proses update
public function update(Request $request, $kode_peminjaman)
{

    $update['status'] = $request->get('status');
    PeminjamanGuru::where('kode_peminjaman', $kode_peminjaman)->update($update);

    if( $request->get('status') == "1"){

        $peminjaman = PeminjamanGuru::find($kode_peminjaman);
        $denda = 0;

        if(\Carbon\Carbon::now() > $peminjaman->tgl_selesai){
            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $peminjaman->tgl_selesai);

            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',  \Carbon\Carbon::now());

            $diff_in_days = $to->diffInDays($from);

            $denda = 500 * (int)$diff_in_days;
        }


        $pn = PengembalianGuru::where('kode_peminjaman', $kode_peminjaman)->first();
        if(!$pn){
            $pn = new PengembalianGuru();
            $pn->status = 1;
            $pn->kode_peminjaman = $kode_peminjaman;
            $pn->denda = $denda;
            $pn->save();

            $buku = Buku::find($peminjaman->buku_id);
            $buku->stok = (int)$buku->stok + 1;
            $buku->save();
        }

    }


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
