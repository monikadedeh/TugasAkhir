<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //kategori
    public function index(){
        return view('landingpage.buku.index');
    }

    //kategori
    public function detail(){
        return view('landingpage.buku.detail');
    }
}
