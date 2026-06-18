<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\SppdController;


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
Route::put('/update/dept/{id_dept}', [DeptController::class, 'update'])->name('update-dept');
Route::delete('/delete/dept/{id_dept}', [DeptController::class, 'delete'])->name('hapus-dept');

//Rute Route

Route::get('/rute', [RuteController::class, 'rute'])->name('rute');
Route::get('/tambah-rute', [RuteController::class, 'tambah'])->name('tambah-rute');
Route::post('/simpan-rute', [RuteController::class, 'simpan'])->name('simpan-rute');
Route::get('/rute/edit/{id_rute}', [RuteController::class, 'edit'])->name('edit-rute');
Route::put('/update/rute/{id_rute}', [RuteController::class, 'update'])->name('update-rute');
Route::delete('/delete/rute/{id_rute}', [RuteController::class, 'delete'])->name('hapus-rute');

//SPPD Route

Route::get('/sppd', [SppdController::class, 'sppd'])->name('sppd');
Route::get('/tambah-sppd', [SppdController::class, 'tambah'])->name('tambah-sppd');
Route::post('/simpan-sppd', [SppdController::class, 'simpan'])->name('simpan-sppd');
Route::get('/sppd/edit/{id_perjalanan}', [SppdController::class, 'edit'])->name('edit-sppd');
Route::put('/update/sppd/{id_perjalanan}', [SppdController::class, 'update'])->name('update-sppd');
Route::delete('/delete/sppd/{id_perjalanan}', [SppdController::class, 'delete'])->name('hapus-sppd');
