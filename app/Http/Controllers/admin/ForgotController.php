<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PegawaiPerpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ForgotController extends Controller
{

    public function index()
    {
        return view('admin.forgot.index');
    }

    public function cariTelepon(Request $request)
    {
        $admin = PegawaiPerpustakaan::whereno_telepon($request->no_telepon)->first();

        if ($admin != null){
            return view('admin.forgot.forgotPw', ['no_telepon' =>$request->no_telepon])->with('status', 'Berhasil');
        } else {
            return view('admin.forgot.index')->with('failed', 'Nomor Telepon Tidak Terdaftar');
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
            $change = DB::table('pegawai_perpustakaan')
            ->where('no_telepon', $no_telepon)
            ->update(['password' => Hash::make($newPassword)]);

            return redirect('admin/login')->with('success', 'Berhasil Mengganti Password');
        } elseif($newPassword != $confirmPassword){

            return view('admin.forgot.forgotPw', ['no_telpon'=>$no_telepon])->with('failedPass', 'Password Konfirmasi Tidak Sama');
        }
    }
}
