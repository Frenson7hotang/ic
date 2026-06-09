<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeptController extends Controller
{
    public function profil()
    {
        $profil = \App\Models\ProfilModel::all();
        $status = \App\Models\StatusModel::all();

        return view('profile', ['profil' => $profil]);
    }

    public function tambah()
    {
        return view('add-profil');
    }
}
