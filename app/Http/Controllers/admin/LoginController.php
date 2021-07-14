<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PegawaiPerpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    //dashboard
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function masuk(){
        return view('admin.login');
    }

     //Login
    public function simpan(Request $request){
        // dd($request->all());

        $data = PegawaiPerpustakaan::where('username', $request->username)->first();
        // dd($data);
        if (!$data){
            return redirect('admin/login')->with('message1', 'username salah');
        }else{
            if(Hash::check($request->password, $data->password)){
                Session::put('username',$data->username);
                Session::put('nama_pustakawan',$data->nama_pustakawan);
                Session::put('id',$data->id);



                session(['berhasil_login' => true]);
                return redirect('admin/dashboard');
            }
            return redirect('admin/login')->with('message2', 'password salah');
        }

    }

    //Logout
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('admin/login');
    }
}
