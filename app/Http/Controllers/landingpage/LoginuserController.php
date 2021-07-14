<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginuserController extends Controller
{
    //Login
    public function loginuser(){
        return view('landingpage.login');
    }

    //Login
    public function simpan(Request $request){
        // dd($request->all());

        $data = User::where('username', $request->username)->first();
        // dd($data);
        if (!$data){
            return redirect('user/login')->with('message1', 'username salah');
        }else{
            if(Hash::check($request->password, $data->password)){
                Session::put('username',$data->username);
                Session::put('nama_siswa',$data->nama_siswa);
                Session::put('id',$data->id);



                session(['berhasil_login' => true]);
                return redirect('/');
            }
            return redirect('user/login')->with('message2', 'password salah');
        }

    }

    //Logout
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
