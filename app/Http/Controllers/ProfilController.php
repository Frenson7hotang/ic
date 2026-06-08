<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil()
    {
        return view('profile');
    }

    public function tambah()
    {
        return view('add-profil');
    }
}
