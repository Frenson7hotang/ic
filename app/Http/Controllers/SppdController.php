<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SppdModel;
use \App\Models\RuteModel;
use \App\Models\ProfilModel;

class SppdController extends Controller
{
    public function sppd()
    {
        $luar = SppdModel::get();
        $luar = ProfilModel::with('dept')->get();
        return view('perjalanan', ['luar' => $luar]);
    }

    public function tambah()
    {
        $rute = RuteModel::all();
        $profil = ProfilModel::all();
        return view('add-sppd', ['rute' => $rute, 'profil' => $profil]);
    }
}
