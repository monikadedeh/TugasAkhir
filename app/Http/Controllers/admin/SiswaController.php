<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class SiswaController extends Controller
{
    //Siswa
    public function index(){
        $siswa= User::with('kelasRef')->get();
        return view('admin.siswa.index', compact('siswa'));
    }

     //Tampil Detail
     public function detail($id){
        $siswa= User::where('id', $id)->with('kelasRef')->first();
        return view('admin.siswa.detail', compact('siswa'));
        }

    //hapus data
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('siswa.index')->with('status', 'Data Berhasil Dihapus');
    }
}
