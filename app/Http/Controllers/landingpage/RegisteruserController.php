<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisteruserController extends Controller
{
     //Regis
     public function registeruser(){
        return view('landingpage.register');
    }

    public function addProcess(Request $request)
    {
        $timestamps = true;
        //query builder insert
        // dd($request->all());
        if($request->password != $request->confirmPassword){
             return redirect()->route('user.register')->with('statusFailed', 'Password Konfirmasi Tidak Sama');
        }else{
            $UserLogin = new User();
            $UserLogin->nama_siswa = $request->nama_siswa;
            $UserLogin->username = $request->username;
            $UserLogin->password = Hash::make($request->password);


            $UserLogin->save();
            //
            if($UserLogin->save()){
                $data = ([
                    'nama_siswa' => $request->nama_siswa,
                    'username' => $request->username,
                ]);

                return redirect()->route('user.login')->with('message', 'Register Berhasil');
            }else{
                return redirect()->route('user.register')->with('message2', 'Register akun gagal');
            }
        }
    }
}
