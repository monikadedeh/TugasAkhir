<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Buku;
use App\Model\PeminjamanSiswa;
use App\Model\PengembalianSiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class PengembaliansiswaController extends Controller
{
    //pengembalian siswa
    public function pengembalian_siswa(){
        $pjguru = PengembalianSiswa::all();
        return view('admin.pengembalian_siswa.index' , compact('pjguru'));
        }

    //form pengembalian siswa
    public function formTambah($kode_peminjaman){
        $siswa = User::all();
        $buku = Buku::all();
        $pinjam = PeminjamanSiswa::with('bukuRef', 'siswaRef')->find($kode_peminjaman);
        return view('admin.pengembalian_siswa.tambah', compact('buku', 'siswa', 'pinjam'));
    }

    //tambah pengembalian siswa
    public function tambahPengembalian(Request $request){
        $this->validate($request, [
            'denda' => 'required',
            'status' => 'required',
            'kode_peminjaman' => 'required',
        ]);
        $post =  new PengembalianSiswa();
        $post->denda = $request->denda;
        $post->status = $request->status;
        $post->kode_peminjaman = $request->kode_peminjaman;
        $post->save();
        return redirect('pengembalian/siswa/index');
    }

        //tampil edit
        public function editData($id_pengembalian_siswa){
            $editpengembalian = PengembalianSiswa::find($id_pengembalian_siswa);
            // dd($editpengembalian);
            return view('admin.pengembalian_siswa.edit', compact('editpengembalian'));

        }
        //proses update
        public function editProses(Request $request, $id_pengembalian_siswa)
        {
            $editpengembalian = PengembalianSiswa::find($request->id_pengembalian_siswa);
            $editpengembalian->denda =$request->denda;
            $editpengembalian->save();


            return redirect()->route('pengembalian.siswa.index')->with('status', 'Data Berhasil Diedit');
        }

        //hapus data
        public function delete($id_pengembalian_siswa)
        {
            ($id_pengembalian_siswa);
            DB::table('pengembalian_siswa')->where('id_pengembalian_siswa', $id_pengembalian_siswa)->delete();

            return redirect()->route('pengembalian.siswa.index')->with('status', 'Data Berhasil Dihapus');
        }

        //detail
        public function detail($id_pengembalian_siswa){
            $detail = PengembalianSiswa::with('peminjamanRef')->find($id_pengembalian_siswa);
            //   dd($detail);
            return view('admin.pengembalian_siswa.detail', compact('detail'));
            }

}
