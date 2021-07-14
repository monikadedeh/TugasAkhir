<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\KritikSaran;
use App\User;
use Illuminate\Http\Request;
use Throwable;



class KritikController extends Controller
{
    //Kritik dan saran
    public function index(){
    $kritik= KritikSaran::all();
    return view('landingpage.kritik.index', compact('kritik'));
    }


    //proses tambah data
    public function simpan(Request $request)
    {

        try {
                $kritik = new KritikSaran();
                $kritik->nama_lengkap = $request->nama_lengkap;
                $kritik->kritik = $request->kritik;
                $kritik->saran = $request->saran;
                $kritik->save();
                // dd($kritik);
                return redirect()->route('user.kritik.index')->with('status', 'Berhasil Menambahkan Data ');
            } catch (Throwable $e) {
                return redirect()->route('user.kritik.index')->with('status', 'Berhasil Menambahkan Data ');
            }
            // dd($request->all());
    }
}
