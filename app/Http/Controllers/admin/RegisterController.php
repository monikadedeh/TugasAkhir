<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PegawaiPerpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    //Register
    public function regis(){
        return view('admin.register');
    }

     public function addProcess(Request $request)
    {
        $timestamps = true;
        //query builder insert
        if($request->password != $request->confirmPassword){
             return redirect()->route('admin.register')->with('statusFailed', 'Password Konfirmasi Tidak Sama');
        }else{
            $AdminLogin = new PegawaiPerpustakaan();
            $AdminLogin->nama_pustakawan = $request->nama_pustakawan;
            $AdminLogin->username = $request->username;
            $AdminLogin->password = Hash::make($request->password);


            $AdminLogin->save();
            //
            if($AdminLogin->save()){
                $data = ([
                    'nama_pustakawan' => $request->nama_pustakawan,
                    'username' => $request->username,
                ]);

                return redirect()->route('admin.login')->with('message', 'Register Berhasil');
            }else{
                return redirect()->route('admin.register')->with('message2', 'Register akun gagal');
            }
        }
    }
}
