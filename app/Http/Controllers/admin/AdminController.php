<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PegawaiPerpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;



class AdminController extends Controller
{
    //Admin
   public function index(){
       $admin= PegawaiPerpustakaan::all();
    return view('admin.admin.index', compact('admin'));
    }

    // //Halaman Tambah
    // public function tambah(){
    //     return view('admin.admin.tambah');
    // }

    // //proses tambah Admin
    // public function simpan(Request $request)
    // {
    //     try {
    //         $admin = new PegawaiPerpustakaan();
    //         $admin->nama_pustakawan = $request->nama_pustakawan;
    //         $admin->email_perpusatkawaan = $request->email_perpusatkawaan;
    //         $admin->alamat = $request->alamat;
    //         $admin->jenis_kelamin = $request->jenis_kelamin;
    //         $admin->no_telepon= $request->no_telepon;
    //         $admin->save();

        //     return redirect()->route('admin.index')->with('status', 'Berhasil Menambahkan Data Merek Kendaraan');
        // } catch (Throwable $e) {
        //     return redirect()->route('admin.index')->with('status', 'Berhasil Menambahkan Data Merek Kendaraan');
        // }
    // }


    //tampil edit
      public function edit($id){
        $editadmin = PegawaiPerpustakaan::find($id);
        return view('admin.admin.edit', compact('editadmin'));

    }

    //proses update
    public function update(Request $request, $id)
    {
        $editadmin = PegawaiPerpustakaan::find($request->id);
        $editadmin->nama_pustakawan = $request->nama_pustakawan;
        $editadmin->email_perpusatkawaan = $request->email_perpusatkawaan;
        $editadmin->alamat = $request->alamat;
        $editadmin->no_telepon= $request->no_telepon;
        $editadmin->save();
        return redirect()->route('admin.index')->with('status', 'Data Berhasil Diedit');
    }
    //hapus data
    public function delete($id)
    {
        DB::table('pegawai_perpustakaan')->where('id', $id)->delete();

        return redirect()->route('admin.index')->with('status', 'Data Berhasil Dihapus');
    }
}
