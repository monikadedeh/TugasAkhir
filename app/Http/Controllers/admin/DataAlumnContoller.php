<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;


class DataAlumnContoller extends Controller
{
    public function index(){
        $alumni = User::all();
        return view('admin.data_alumni.index', compact('alumni'));
    }
}
