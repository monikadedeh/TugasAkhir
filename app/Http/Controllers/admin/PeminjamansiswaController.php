<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Buku;
use App\Model\PeminjamanSiswa;
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
    PeminjamanSiswa::where('kode_peminjaman', $kode_peminjaman)->update($update);
    return redirect()->route('peminjaman.siswa.index')->with('alert', 'Data  Berhasil diperbarui');
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
