<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;


class SiswaController extends Controller
{
    //Siswa
    public function index(){
        $siswa= User::with('kelasRef')->get();
        return view('admin.siswa.index', compact('siswa'));
    }

    //exel siswa
    public function index2(){
        return view('admin.siswa.index2');
    }
    public function import_excel(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);

		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Data Siswa Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect()->route('siswa.index');
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
