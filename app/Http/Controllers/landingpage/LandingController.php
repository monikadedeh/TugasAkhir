<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\KritikSaran;
use Illuminate\Http\Request;



class LandingController extends Controller
{
    //dashboard
    public function index(){
        $kritik = KritikSaran::where('status', '=', '1')->get();
        return view('landingpage.index', compact('kritik'));
    }
}
