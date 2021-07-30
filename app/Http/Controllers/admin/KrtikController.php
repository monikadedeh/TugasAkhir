<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\KritikSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KrtikController extends Controller
{
    //Kritik
    public function index(){
        $kritik= KritikSaran::all();
        return view('admin.kritik.index', compact('kritik'));
        }

    //hapus data
    public function delete($id)
    {
        DB::table('kritiksaran')->where('id', $id)->delete();

        return redirect()->route('admin.kritik.index')->with('status', 'Data Berhasil Dihapus');
    }
      //tampil edit
      public function editData($id){
        $editkritik = KritikSaran::find($id);
        // dd($editkritik);
        return view('admin.kritik.edit', compact('editkritik'));

    }
     //proses update
     public function editProses(Request $request, $id)
     {
         $editkritik = KritikSaran::find($request->id);
         $editkritik->status =$request->status;
         $editkritik->save();


         return redirect()->route('admin.kritik.index')->with('status', 'Data Berhasil Diedit');
     }
}
