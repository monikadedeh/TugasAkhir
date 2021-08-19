<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Buku;
use App\Model\PeminjamanSiswa;
use App\Model\PengembalianSiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeminjamansiswaController extends Controller
{
 //peminjaman
 public function pinjaman_siswa(){
    $pinjam= PeminjamanSiswa::with('siswaRef', 'bukuRef')->get();
    return view('admin.peminjaman_siswa.index', compact('pinjam'));
    }


//tampil edit
   public function edit($kode_peminjaman){
    $siswa = User::all();
    $buku = Buku::all();
    $pinjam = PeminjamanSiswa::with('bukuRef', 'siswaRef')->find($kode_peminjaman);
    return view('admin.peminjaman_siswa.edit', compact('pinjam', 'buku','siswa'));

}

//proses update
public function update(Request $request, $kode_peminjaman)
{

    $update['status'] = $request->get('status');
    PeminjamanSiswa::where('kode_peminjaman', $kode_peminjaman)->update($update);

    if( $request->get('status') == "1"){

        $peminjaman = PeminjamanSiswa::find($kode_peminjaman);
        $denda = 0;

        if(\Carbon\Carbon::now() > $peminjaman->tgl_selesai){
            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $peminjaman->tgl_selesai);

            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',  \Carbon\Carbon::now());

            $diff_in_days = $to->diffInDays($from);

            $denda = 500 * (int)$diff_in_days;
        }

        // dd($denda);

        $pn = PengembalianSiswa::where('kode_peminjaman', $kode_peminjaman)->first();
        if(!$pn){
            $pn = new PengembalianSiswa();
            $pn->status = 1;
            $pn->kode_peminjaman = $kode_peminjaman;
            $pn->denda = $denda;
            $pn->save();

            $buku = Buku::find($peminjaman->buku_id);
            $buku->stok = (int)$buku->stok + 1;
            $buku->save();
        }

    }
    return redirect()->route('pengembalian.siswa.index')->with('alert', 'Data  Berhasil diperbarui');
}
//hapus data
public function delete($kode_peminjaman)
{
    ($kode_peminjaman);
    DB::table('peminjaman_siswa')->where('kode_peminjaman', $kode_peminjaman)->delete();

    return redirect()->route('peminjaman.siswa.index')->with('status', 'Data Berhasil Dihapus');
}

//detail
public function detail($kode_peminjaman){
    $detail = PeminjamanSiswa::with('siswaRef', 'bukuRef')->find($kode_peminjaman);
    return view('admin.peminjaman_siswa.detail', compact('detail'));
    }

}
