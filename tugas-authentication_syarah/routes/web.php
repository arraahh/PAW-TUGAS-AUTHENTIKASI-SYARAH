<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('welcome');
});


Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

