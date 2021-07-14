<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //History
    public function index(){
        return view('landingpage.history.index');
    }

    //detail history
    public function detail(){
        return view('landingpage.history.detail');
    }
}
