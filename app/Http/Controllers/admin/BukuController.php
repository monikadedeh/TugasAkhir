<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Buku;
use App\Model\PeminjamanGuru;
use App\Model\PeminjamanSiswa;
use App\Model\PengembalianGuru;
use App\Model\PengembalianSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;




class BukuController extends Controller
{
    //Tampil index Buku
    public function index(){
        $buku= Buku::all();
        return view('admin.buku.index', compact('buku'));
    }

    //Halaman Tambah
    public function tambah(){
        return view('admin.buku.tambah');
    }

    //proses tambah data
    public function simpan(Request $request)
    {

        try {
            if ($request->hasFile('foto')) {
            $resorce = $request->file('foto');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() . "/public/foto-buku", $name);
                $buku = new Buku();
                $buku->nama_buku = $request->nama_buku;
                $buku->kategori_id = $request->kategori_id;
                $buku->penulis = $request->penulis;
                $buku->penerbit = $request->penerbit;
                $buku->tahun = $request->tahun;
                $buku->stok = $request->stok;
                $buku->deskripsi = $request->deskripsi;
                $buku->foto = $name;
                $buku->save();
             echo "Foto berhasil di upload";
                return redirect()->route('buku.index')->with('status', 'Berhasil Menambahkan Data Buku');
            } else {
                echo "Gagal upload Foto";
                return redirect()->route('buku.index')->with('status', 'Gagal Menambahkan Data Buku');
            }
        } catch (Throwable $e) {
            return $e;
        }
    }
   //tampil edit
      public function edit($id){
        $editbuku = Buku::find($id);
        return view('admin.buku.edit', compact('editbuku'));

    }

    //proses update
    public function update(Request $request, $id)
    {
        try {
            $name = $request->oldFoto;
            if ($request->hasFile('foto')) {
                $resorce = $request->file('foto');
                $name   = $resorce->getClientOriginalName();
                $resorce->move(\base_path() . "/public/foto-buku", $name);
            }
            $editbuku = Buku::find($request->id);
            $editbuku->nama_buku = $request->nama_buku;
            $editbuku->kategori_id = $request->kategori_id;
            $editbuku->penulis = $request->penulis;
            $editbuku->penerbit = $request->penerbit;
            $editbuku->tahun = $request->tahun;
            $editbuku->stok = $request->stok;
            $editbuku->deskripsi = $request->deskripsi;
            $editbuku->foto = $name;
            $editbuku->save();
            echo "Foto berhasil di upload";
            //  dd($editbuku);
                return redirect()->route('buku.index')->with('status', 'Berhasil Edit Data Buku');
        } catch (Throwable $e) {
            // dd($request->all());
        }
    }
    //hapus data
    public function delete($id)
    {
        DB::table('buku')->where('id', $id)->delete();

        return redirect()->route('buku.index')->with('status', 'Data Berhasil Dihapus');
    }
     //Tampil Detail
     public function detail($id){
        $buku= DB::table('buku')->where('id', $id)->first();
        $pinjam_guru = PeminjamanGuru::where('buku_id', $id)->count();
        $pinjam_siswa = PeminjamanSiswa::where('buku_id', $id)->count();

        $pinjam_guruu = PeminjamanGuru::where('buku_id', $id)->first();
        $pinjam_siswaa = PeminjamanSiswa::where('buku_id', $id)->first();
        $kembali_guru = PengembalianGuru::where('kode_peminjaman', $pinjam_guruu)->count();
        $kembali_siswa = PengembalianSiswa::where('kode_peminjaman', $pinjam_siswaa)->count();

        return view('admin.buku.detail', compact('buku', 'pinjam_guru', 'pinjam_siswa', 'pinjam_siswaa', 'pinjam_guruu', 'kembali_siswa', 'kembali_guru'));
        }
}
