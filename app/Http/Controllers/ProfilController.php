<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil()
    {
        $profil = \App\Models\ProfilModel::all();

        return view('profile', ['profil' => $profil]);
    }

    public function tambah()
    {
        return view('add-profil');
    }
}
