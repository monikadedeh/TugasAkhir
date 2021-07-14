<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //dashboard
    public function index(){
        return view('landingpage.index');
    }
}
