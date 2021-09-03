<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'nama_siswa' => $row[1],
            'jenis_kelamin' => $row[2],
            'alamat' => $row[3],
            'username' => $row[4],
            'password' => $row[5],
            'no_telepon' => $row[6],
            'foto' => $row[7],
            'email_siswa' => $row[8],
            'id_kelas' => $row[9],

        ]);
    }
}
