<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanuserController extends Controller
{
     //peminjaman
     public function index(){
        return view('landingpage.peminjaman.index');
        }
}
