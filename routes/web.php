<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DeptController;

Route::get('/', function () {
    return view('dashboard');
});

//Profil Route

Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/tambah-profil', [ProfilController::class, 'tambah'])->name('tambah-profil');
Route::post('/simpan-profil', [ProfilController::class, 'simpan'])->name('simpan-profil');
Route::get('/profil/edit/{id_user}', [ProfilController::class, 'edit'])->name('edit-profil');
Route::post('/update/profil/{id_user}', [ProfilController::class, 'update'])->name('update-profil');
Route::get('/profil/hapus/{id_user}', [ProfilController::class, 'hapus'])->name('hapus');

//Departement Route

Route::get('/departement', [DeptController::class, 'departement'])->name('departement');
//Route::get('/tambah-profil', [DeptController::class, 'tambah'])->name('tambah-profil');
