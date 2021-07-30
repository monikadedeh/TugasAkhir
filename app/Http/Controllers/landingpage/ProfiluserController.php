<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Kelas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;



class ProfiluserController extends Controller
{
     //upadate profil user
     public function updateprofiluser(){
        $editprofil = User::all();
        return view('landingpage.profiluser.ganti', compact('editprofil'));
    }

    //tampil edit
    public function edit($id){
        $kelas= Kelas::all();
        $editprofil = User::find($id);
        return view('landingpage.profiluser.ganti', compact('editprofil', 'kelas'));

    }

     //proses update
     public function update(Request $request, $id)
     {

         try {
             $name = $request->oldFoto;
             if ($request->hasFile('foto')) {
                 $resorce = $request->file('foto');
                 $name   = $resorce->getClientOriginalName();
                 $resorce->move(\base_path() . "/public/foto-user", $name);
             }

             $editprofil = User::find($request->id);
             $editprofil->nama_siswa = $request->nama_siswa;
             $editprofil->jenis_kelamin = $request->jenis_kelamin;
             $editprofil->alamat = $request->alamat;
             $editprofil->no_telepon = $request->no_telepon;
             $editprofil->email_siswa = $request->email_siswa;
             $editprofil->id_kelas = $request->id_kelas;
             $editprofil->foto = $name;
             $editprofil->save();
             echo "Foto berhasil di upload";
                 return redirect()->route('profil.user.edit', $id)->with('status', 'Berhasil Edit Data Buku');
         } catch (Throwable $e) {
            // //  dd($e);
            //  dd($request->all());
         }
     }

    //gantipassword
    public function passworduser(){
        return view('landingpage.profiluser.ubahpassword');
    }

     //tampil update Password
     public function updatePw($id){
        $editpw = DB::table('users')->where('id', $id)->first();
        return view('landingpage.profiluser.ubahpassword', compact('editpw'));

    }

    //Update password
    public function updatePassword(Request $request, $id)
    {

        $newPassword = $request->newPassword;
        if ($newPassword === $request->confirmPassword) {
            DB::table('users')->where('id', $id)->update([
                'password' => Hash::make($request->newPassword),
            ]);
            return redirect()->route('user.update.password',  $id)->with("editpw", "Berhasil Ganti Password");
        } else {
           return redirect()->route('user.update.password',  $id)->with("failedpw", "Gagal Ganti Password");
        }
    }
}
