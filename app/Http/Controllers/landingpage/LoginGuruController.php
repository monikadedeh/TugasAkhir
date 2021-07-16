<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Model\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




class LoginGuruController extends Controller
{
    //Login
    public function loginguru(){
        return view('landingpage.loginguru');
    }

    //Login
    public function simpan(Request $request){
        // dd($request->all());

        $data = Guru::where('username', $request->username)->first();
        // dd($data);
        if (!$data){
            return redirect('user.login.guru')->with('message1', 'username salah');
        }else{
            if(Hash::check($request->password, $data->password)){
                Session::put('username',$data->username);
                Session::put('nama_guru',$data->nama_);
                Session::put('id_guru',$data->id);
                Session::put('is_user', 0);
                Session::put('is_guru', 1);

                session(['berhasil_login' => true]);
                return redirect('/');
            }
            return redirect('user.login.guru')->with('message2', 'password salah');
        }

    }

    //Logout
    public function logoutguru(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
