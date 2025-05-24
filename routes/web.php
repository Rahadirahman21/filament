<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[UserController::class, 'index'])->name('home');
Route::get('/profil',[UserController::class, 'profilIndex'])->name('profil');
