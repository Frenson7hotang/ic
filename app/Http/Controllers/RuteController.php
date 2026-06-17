<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\RuteModel;

class RuteController extends Controller
{
     public function rute()
    {
       $rute = RuteModel::get();

        return view('rute', ['rute' => $rute]);
    }

    public function tambah()
    {
        return view('add-rute');
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
        'nama_rute' => 'required',
        'jarak' => 'required'
        ]);
        
        RuteModel::create([
        'nama_rute' => $request->nama_rute,
        'jarak' => $request->jarak
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function edit($id_rute)
    {
      $Rute = RuteModel::where('id_rute', $id_rute)->firstOrFail();
       return view('edit-rute', compact('Rute'));
    }

    public function update(Request $request, $id_rute)
    {
        $validated = $request->validate([
        'nama_rute' => 'required',
        'jarak' => 'required'
        ]);

         $Rute = RuteModel::findOrFail($id_rute);

         $Rute->update([
         'nama_rute' => $request->nama_rute,
         'jarak' => $request->jarak
         ]);

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function delete($id_rute)
        {
            $rute = RuteModel::findOrFail($id_rute);

            // Hapus data dari database
            $rute->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus');
        }
}
