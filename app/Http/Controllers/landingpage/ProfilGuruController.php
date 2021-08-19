<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Model\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Illuminate\Support\Facades\Hash;



class ProfilGuruController extends Controller
{
     //upadate profil guru
     public function updateprofilguru(){
        $editprofil = Guru::all();
        return view('landingpage.profilguru.ganti', compact('editprofil'));
    }

    //tampil edit
    public function edit($id){
        $editprofil = Guru::find($id);
        return view('landingpage.profilguru.ganti', compact('editprofil'));

    }

     //proses update
     public function update(Request $request, $id)
     {
         try {
             $name = $request->oldFoto;
             if ($request->hasFile('foto')) {
                 $resorce = $request->file('foto');
                 $name   = $resorce->getClientOriginalName();
                 $resorce->move(\base_path() . "/public/foto-guru", $name);
             }

             $editprofil = Guru::find($request->id);
             $editprofil->nama_guru = $request->nama_guru;
             $editprofil->jenis_kelamin = $request->jenis_kelamin;
             $editprofil->alamat = $request->alamat;
             $editprofil->no_telepon = $request->no_telepon;
             $editprofil->email_guru = $request->email_guru;
             $editprofil->foto = $name;
             $editprofil->save();
             echo "Foto berhasil di upload";
                 return redirect()->route('profil.guru.edit', $id)->with('status', 'Berhasil Edit Data Guru');
         } catch (Throwable $e) {
             dd($e);
            //  dd($request->all());
         }
     }

    //gantipassword
    public function passwordguru(){
        return view('landingpage.profilguru.ubahpassword');
    }

     //tampil update Password
     public function updatePw($id){
        $editpw = DB::table('guru')->where('id', $id)->first();
        // dd($editpw);
        return view('landingpage.profilguru.ubahpassword', compact('editpw'));

    }

    //Update password
    public function updatePassword(Request $request, $id)
    {

        $newPassword = $request->newPassword;
        if ($newPassword === $request->confirmPassword) {
            DB::table('guru')->where('id', $id)->update([
                'password' => Hash::make($request->newPassword),
            ]);
            return redirect()->route('user.guru.update.password', $id)->with("editpw", "Berhasil Ganti Password");
        } else {
           return redirect()->route('user.guru.update.password', $id)->with("failedpw", "Gagal Ganti Password");
        }
    }
}
