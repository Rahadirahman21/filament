<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[UserController::class, 'index'])->name('home');
Route::get('/profil',[UserController::class, 'profilIndex'])->name('profil');
Route::get('/sarana',[UserController::class, 'saranaIndex'])->name('sarana');
Route::get('/siswa',[UserController::class, 'siswaIndex'])->name('siswa');
Route::get('/jurusan',[UserController::class, 'jurusanIndex'])->name('jurusan');
