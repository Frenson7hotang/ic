<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ProfilModel;
use \App\Models\DeptModel;
use \App\Models\StatusModel;
use \App\Models\JabatanModel;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function profil()
    {
        $profil = ProfilModel::with('dept')->get();
        $profil = ProfilModel::with('stat')->get();
        $profil = ProfilModel::with('jab')->get();
        return view('profile', ['profil' => $profil]);
    }

    public function tambah()
    {
        $status = StatusModel::all();
        $dept = DeptModel::all();
        $jabatan = JabatanModel::all();
        return view('add-profil', ['status' => $status, 'dept' => $dept, 'jabatan' => $jabatan]);
    }

    public function simpan(Request $request)
    {
       $validated = $request->validate([
            'nama_user' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'departement' => 'required',
            'alamat_email' => 'required',
            'jabatan' => 'required',
            'tanggal_bergabung' => 'required',
            'status_karyawan' => 'required',
            'hak_cuti' => 'required',
            'gambar' => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf|max:10240',
        ]); 

        $mediaPath = null;

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $mediaPath = $file->store('gambar', 'public');
            }

            ProfilModel::create([
                'nama_user' => $request->nama_user,
                'nik' => $request->nik,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'departement' => $request->departement,
                'alamat_email' => $request->alamat_email,
                'jabatan' => $request->jabatan,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'status_karyawan' => $request->status_karyawan,
                'hak_cuti' => $request->hak_cuti,
                'gambar' => $mediaPath,
            ]);

            return redirect()->back()->with('success', 'Data berhasil disimpan');
            }

            public function edit($id_user)
            {
                 $profils = ProfilModel::where('id_user', $id_user)->firstOrFail();
                 $dept = DeptModel::all();
                 $jabatan = JabatanModel::all();
                 $status = StatusModel::all();
                 return view('profil-edit', compact('profils', 'dept', 'jabatan', 'status'));
            }
            
            public function update(Request $request, $id_user)
            {
             $validated = $request->validate([
                'nama_user' => 'required',
                'nik' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'departement' => 'required',
                'alamat_email' => 'required',
                'jabatan' => 'required',
                'tanggal_bergabung' => 'required',
                'status_karyawan' => 'required',
                'hak_cuti' => 'required',
                'gambar' => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf|max:10240',
                ]); 

            }
}