<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ForgotSiswaController extends Controller
{
    public function index()
    {
        return view('landingpage.forgot_siswa.index');
    }

    public function cariTelepon(Request $request)
    {
        $siswa = User::whereno_telepon($request->no_telepon)->first();

        if ($siswa != null){
            return view('landingpage.forgot_siswa.forgotPw', ['no_telepon' =>$request->no_telepon])->with('status', 'Berhasil');
        } else {
            return view('landingpage.forgot.index')->with('failed', 'Nomor Telepon Tidak Terdaftar');
        }
    }

    //tampil cari nomor telepon
    public function forgotpw(Request $request)
    {
        $newPassword = $request->newPassword;
        $no_telepon = $request->no_telepon;
        $confirmPassword = $request->confirmPassword;
        //    dd($newPassword, $confirmPassword);
        if ($newPassword === $confirmPassword){
            $change = DB::table('users')
            ->where('no_telepon', $no_telepon)
            ->update(['password' => Hash::make($newPassword)]);

            return redirect('/')->with('success', 'Berhasil Mengganti Password');
        } elseif($newPassword != $confirmPassword){

            return view('admin.forgot_siswa.forgotPw', ['no_telpon'=>$no_telepon])->with('failedPass', 'Password Konfirmasi Tidak Sama');
        }
    }
}
