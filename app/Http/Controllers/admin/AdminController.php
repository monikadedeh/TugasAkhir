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

     //Tampil Detail
     public function detail($id){
        $admindetail= DB::table('pegawai_perpustakaan')->where('id', $id)->first();
        return view('admin.admin.detail', compact('admindetail'));
        }
}
