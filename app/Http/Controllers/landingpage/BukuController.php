<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Model\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BukuController extends Controller
{
    //Tampil index Buku
    public function index(){
        $buku= Buku::with('kategoriRef')->get();

        return view('landingpage.buku.index', compact('buku'));
    }

     //Tampil Detail
     public function detail($id){
        $buku= Buku::with('kategoriRef')->where('id', $id)->first();
        return view('landingpage.buku.detail', compact('buku'));
        }
}
