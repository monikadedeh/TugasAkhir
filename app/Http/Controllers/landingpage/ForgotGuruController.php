<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Model\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ForgotGuruController extends Controller
{
    public function index()
    {
        return view('landingpage.forgot_guru.index');
    }

    public function cariTelepon(Request $request)
    {
        $siswa = Guru::whereno_telepon($request->no_telepon)->first();

        if ($siswa != null){
            return view('landingpage.forgot_guru.forgotPw', ['no_telepon' =>$request->no_telepon])->with('status', 'Berhasil');
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
            $change = DB::table('guru')
            ->where('no_telepon', $no_telepon)
            ->update(['password' => Hash::make($newPassword)]);

            return redirect('/')->with('success', 'Berhasil Mengganti Password');
        } elseif($newPassword != $confirmPassword){

            return view('admin.forgot_guru.forgotPw', ['no_telpon'=>$no_telepon])->with('failedPass', 'Password Konfirmasi Tidak Sama');
        }
    }
}
