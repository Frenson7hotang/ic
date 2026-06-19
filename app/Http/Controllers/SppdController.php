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
    
        $luar = SppdModel::with(['asal', 'tujuan'])->get();
        return view('perjalanan', ['luar' => $luar]);
    }

    public function tambah()
    {
        $rute = RuteModel::all();
        $profil = ProfilModel::all();
        return view('add-sppd', ['rute' => $rute, 'profil' => $profil]);
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'asal' => 'required',
            'tujuan' => 'required',
            'keperluan' => 'required',
            'keterangan' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_pulang' => 'required',
            'nama_karyawan' => 'required|array',
            'driver',
            'status'
        ]);

        SppdModel::create([
                'asal' => $request->asal,
                'tujuan' => $request->tujuan,
                'keperluan' => $request->keperluan,
                'keterangan' => $request->keterangan,
                'tanggal_berangkat' => $request->tanggal_berangkat,
                'tanggal_pulang' => $request->tanggal_pulang,
                'nama_karyawan' => json_encode($request->nama_karyawan),
                'driver' => 0,
                'status' => 0
            ]);
            return redirect()->back()->with('success', 'Data berhasil disimpan');
            }
    }

