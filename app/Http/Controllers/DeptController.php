<?php

namespace App\Http\Controllers;
use \App\Models\DeptModel;

use Illuminate\Http\Request;

class DeptController extends Controller
{
    public function dept()
    {
        $dept = \App\Models\DeptModel::all();

        return view('departement', ['dept' => $dept]);
    }

    public function tambah()
    {
        return view('add-dept');
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
        'nama_dept' => 'required'
        ]);

        DeptModel::create([
        'nama_dept' => $request->nama_dept,
        'jumlah_staff' => 0
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

}
