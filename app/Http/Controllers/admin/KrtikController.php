<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\KritikSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KrtikController extends Controller
{
    //Kategori
    public function index(){
        $kritik= KritikSaran::all();
        return view('admin.kritik.index', compact('kritik'));
        }

    //hapus data
    public function delete($id)
    {
        DB::table('kritiksaran')->where('id', $id)->delete();

        return redirect()->route('admin.krtik.index')->with('status', 'Data Berhasil Dihapus');
    }
}
