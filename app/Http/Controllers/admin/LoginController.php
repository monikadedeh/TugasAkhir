<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Kelas;
use App\KritikSaran;
use App\Model\Buku;
use App\Model\guru;
use App\Model\KategoriBuku;
use App\Model\PegawaiPerpustakaan;
use App\Model\PeminjamanGuru;
use App\Model\PeminjamanSiswa;
use App\Model\PengembalianGuru;
use App\Model\PengembalianSiswa;
use App\PengunjungGuru;
use App\PengunjungSiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    //dashboard
    public function dashboard(){
        $admin = PegawaiPerpustakaan::count();
        $guru = Guru::count();
        $siswa = User::count();
        $buku = Buku::count();
        $kritik = KritikSaran::count();
        $kategori= KategoriBuku::count();
        $datapengunjung = PengunjungGuru::count();
        $datapengunjungsiswa = PengunjungSiswa::count();
        $pinjamguru = PeminjamanGuru::count();
        $pinjamsiswa = PeminjamanSiswa::count();
        $pengembalianguru = PengembalianGuru::count();
        $pengembaliansiswa = PengembalianSiswa::count();
        $kelas = Kelas::count();

        // $laporan = ::count();
        return view('admin.dashboard',compact('admin','buku','guru','siswa','kritik','kategori',
        'datapengunjung','datapengunjungsiswa','pinjamguru', 'pinjamsiswa', 'pengembalianguru','pengembaliansiswa','kelas'));
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
