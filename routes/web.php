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

//Departement Route

Route::get('/departement', [DeptController::class, 'departement'])->name('departement');
//Route::get('/tambah-profil', [DeptController::class, 'tambah'])->name('tambah-profil');
