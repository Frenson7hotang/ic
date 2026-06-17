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
Route::put('/update/profil/{id_user}', [ProfilController::class, 'update'])->name('update-profil');
Route::delete('/delete/profil/{id_user}', [ProfilController::class, 'delete'])->name('hapus-profil');

//Departement Route

Route::get('/departement', [DeptController::class, 'dept'])->name('departement');
Route::get('/tambah-dept', [DeptController::class, 'tambah'])->name('tambah-dept');
Route::post('/simpan-dept', [DeptController::class, 'simpan'])->name('simpan-dept');
Route::get('/dept/edit/{id_dept}', [DeptController::class, 'edit'])->name('edit-dept');
Route::delete('/delete/dept/{id_dept}', [DeptController::class, 'delete'])->name('hapus-dept');