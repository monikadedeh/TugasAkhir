<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\PegawaiPerpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;




class ProfilController extends Controller
{
    // //upadate profil
    // public function updateprofil(){
    //     return view('admin.profil.updateprofil');
    // }

     //tampil edit
     public function edit($id){
        $editprofil = PegawaiPerpustakaan::find($id);
        return view('admin.profil.updateprofil', compact('editprofil'));

    }

    //  //proses update
    //  public function update(Request $request, $id)
    //  {
    //     dd($request->all());
    //      try {
    //          $name = $request->oldFoto;
    //          if ($request->hasFile('foto')) {
    //              $resorce = $request->file('foto');
    //              $name   = $resorce->getClientOriginalName();
    //              $resorce->move(\base_path() . "/public/foto-admin", $name);
    //          }

    //          $editprofil = PegawaiPerpustakaan::find($request->id);
    //          $editprofil->nama_pustakawan = $request->nama_pustakawan;
    //          $editprofil->jenis_kelamin = $request->jenis_kelamin;
    //          $editprofil->alamat = $request->alamat;
    //          $editprofil->no_telepon = $request->no_telepon;
    //          $editprofil->email_perpusatkawaan= $request->email_perpusatkawaan;
    //          $editprofil->foto = $name;
    //          $editprofil->save();
    //          echo "Foto berhasil di upload";
    //              return redirect()->route('profil.admin.edit', $id)->with('status', 'Berhasil edit data diri');
    //      } catch (Throwable $e) {

    //         //  dd($e);
    //         return redirect()->back()->with('status', 'Gagal edit data diri');
    //      }
    //  }

     //proses update
     public function update(Request $request, $id)
     {

         try {
             $name = $request->oldFoto;
             if ($request->hasFile('foto')) {
                 $resorce = $request->file('foto');
                 $name   = $resorce->getClientOriginalName();
                 $resorce->move(\base_path() . "/public/foto-admin", $name);
             }

             $editprofil = PegawaiPerpustakaan::find($request->id);
             $editprofil->nama_pustakawan = $request->nama_pustakawan;
             $editprofil->jenis_kelamin = $request->jenis_kelamin;
             $editprofil->alamat = $request->alamat;
             $editprofil->no_telepon = $request->no_telepon;
             $editprofil->email_perpusatkawaan = $request->email_perpusatkawaan;
             $editprofil->foto = $name;
             $editprofil->save();
             echo "Foto berhasil di upload";
                 return redirect()->route('profil.admin.edit', $id)->with('status', 'Berhasil Edit Data ');
         } catch (Throwable $e) {
            // //  dd($e);
            //  dd($request->all());
         }
     }
    //gantipassword
    public function password(){
        return view('admin.profil.forgot');
    }

    //tampil update Password
    public function updatePw($id){
        $editpw = DB::table('pegawai_perpustakaan')->where('id', $id)->first();
        return view('admin.profil.forgot', compact('editpw'));

    }
    //Update password
    public function updatePassword(Request $request, $id)
    {
        $name = $request->oldFoto;
             if ($request->hasFile('foto')) {
                 $resorce = $request->file('foto');
                 $name   = $resorce->getClientOriginalName();
                 $resorce->move(\base_path() . "/public/foto-admin", $name);
             }
             $editpassword = PegawaiPerpustakaan::find($request->id);
             $editpassword->foto = $name;
             $editpassword->save();
             echo "Foto berhasil di upload";

        $newPassword = $request->newPassword;
        if ($newPassword === $request->confirmPassword) {
            DB::table('pegawai_perpustakaan')->where('id', $id)->update([
                'password' => Hash::make($request->newPassword),
            ]);
            return redirect()->back()->with("editpw", "Berhasil Ganti Password");
        } else {
           return redirect()->back()->with("failedpw", "Gagal Ganti Password");
        }
    }
}
