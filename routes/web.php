<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/anggota', [AnggotaController::class, 'index']);

Route::get('/galeri', function () {
    return view('galeri');
});
