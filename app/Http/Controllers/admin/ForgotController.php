<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotController extends Controller
{
    //forgot
    public function gantipassword(){
        return view('admin.forgot');
    }
}
