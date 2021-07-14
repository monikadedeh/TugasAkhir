<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\KategoriBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;


class KategoriController extends Controller
{
    //Kategori
    public function index(){
        $kategori= KategoriBuku::all();
        return view('admin.kategori.index', compact('kategori'));
        }
     //Tambah
     public function tambah(){
        return view('admin.kategori.tambah');
    }

    //proses tambah kategori
    public function simpan(Request $request)
    {
        try {
            $kategori = new KategoriBuku();
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->save();

            return redirect()->route('kategori.index')->with('status', 'Berhasil Menambahkan Data Kategori');
        } catch (Throwable $e) {
            return redirect()->route('kategori.index')->with('status', 'Berhasil Menambahkan Data Kategori');
        }
    }
    //tampil edit
    public function edit($id){
        $editkategori = KategoriBuku::find($id);
        return view('admin.kategori.edit', compact('editkategori'));

    }
     //proses update
     public function update(Request $request, $id)
     {
         $editkategori = KategoriBuku::find($request->id);
         $editkategori->nama_kategori = $request->nama_kategori;
         $editkategori->save();
         return redirect()->route('kategori.index')->with('status', 'Data Berhasil Diedit');
     }
     //hapus data
     public function delete($id)
     {
         DB::table('kategori_buku')->where('id', $id)->delete();

         return redirect()->route('kategori.index')->with('status', 'Data Berhasil Dihapus');
     }
}
