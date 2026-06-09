<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ProfilModel;
use \App\Models\DeptModel;
use \App\Models\StatusModel;
use \App\Models\JabatanModel;

class ProfilController extends Controller
{
    public function profil()
    {
        $profil = ProfilModel::all();

        return view('profile', ['profil' => $profil]);
    }

    public function tambah()
    {
        $status = StatusModel::all();
        $dept = DeptModel::all();
        $jabatan = JabatanModel::all();
        return view('add-profil', ['status' => $status, 'dept' => $dept, 'jabatan' => $jabatan]);
    }

    public function simpan()
    {
        $request->validate([
            'id_user',
            'nama_user' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'departement' => 'required',
            'alamat_email' => 'required',

        ]);
    }
}
