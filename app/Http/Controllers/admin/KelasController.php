<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kelas;
use Illuminate\Support\Facades\DB;


class KelasController extends Controller
{
    //Tampil index Buku
    public function index(){
        $kelas= Kelas::all();
        return view('admin.Kelas.index', compact('kelas'));
    }

    //Halaman Tambah
    public function tambah(){
        return view('admin.Kelas.tambah');
    }

    //proses tambah data
    public function simpan(Request $request)
    {
                $kelas = new kelas();
                $kelas->jurusan = $request->jurusan;
                $kelas->kelas = $request->kelas;
                $kelas->save();
                return redirect()->route('kelas.index')->with('status', 'Berhasil Menambahkan Data Kelas');
    }
   //tampil edit
      public function edit($id_kelas){
        $edit = Kelas::find($id_kelas);
        return view('admin.kelas.edit', compact('edit'));

    }

    //proses update
    public function update(Request $request, $id_kelas)
    {

            $edit = Kelas::find($request->id_kelas);
            $edit->jurusan = $request->jurusan;
            $edit->kelas = $request->kelas;
            $edit->save();
                return redirect()->route('kelas.index')->with('status', 'Berhasil Edit Data Kelas');

    }

    //hapus data
    public function delete($id_kelas)
    {
        DB::table('kelas')->where('id_kelas', $id_kelas)->delete();

        return redirect()->route('kelas.index')->with('status', 'Data Berhasil Dihapus');
    }
     //Tampil Detail
     public function detail($id_kelas){
        $detail= DB::table('kelas')->where('id_kelas', $id_kelas)->first();

        return view('admin.kelas.detail', compact('detail'));
        }
}
