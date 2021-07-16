<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Model\guru;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;



class RegisterGuruController extends Controller
{
     //Regis
     public function registerguru(){
        return view('landingpage.registerguru');
    }

    public function addProcess(Request $request)
    {
        $timestamps = true;
        //query builder insert
        // dd($request->all());
        if($request->password != $request->confirmPassword){
             return redirect()->route('user.register.guru')->with('statusFailed', 'Password Konfirmasi Tidak Sama');
        }else{
            $UserLogin = new Guru();
            $UserLogin->nama_guru = $request->nama_guru;
            $UserLogin->username = $request->username;
            $UserLogin->password = Hash::make($request->password);


            $UserLogin->save();
            //
            if($UserLogin->save()){
                $data = ([
                    'nama_guru' => $request->nama_guru,
                    'username' => $request->username,
                ]);

                return redirect()->route('user.login.guru')->with('message', 'Register Berhasil');
            }else{
                return redirect()->route('user.register.guru')->with('message2', 'Register akun gagal');
            }
        }
    }
}
