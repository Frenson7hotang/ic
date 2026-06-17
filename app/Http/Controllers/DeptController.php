<?php

namespace App\Http\Controllers;
use \App\Models\DeptModel;
use \App\Models\ProfilModel;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    public function dept()
    {
        $dept = \App\Models\DeptModel::withCount('profil')->get();

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
        
        $jumlahStaff = ProfilModel::where('departement', $request->nama_dept)->count();

        DeptModel::create([
        'nama_dept' => $request->nama_dept
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function edit($id_dept)
    {
      $Dept = DeptModel::where('id_dept', $id_dept)->firstOrFail();
       return view('edit-dept', compact('Dept'));
    }

    public function update(Request $request, $id_dept)
    {
        $validated = $request->validate([
        'nama_dept' => 'required'
        ]);

         $dept = DeptModel::findOrFail($id_dept);

         $dept->update([
         'nama_dept' => $request->nama_dept
         ]);

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function delete($id_dept)
        {
            $dept = DeptModel::findOrFail($id_dept);

            // Hapus data dari database
            $dept->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus');
        }
}
