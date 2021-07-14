<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginuserController extends Controller
{
    //dashboard
    public function dashboard(){
        return view('user.dashboard');
    }
}
