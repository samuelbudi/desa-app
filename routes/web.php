<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Wisata\WisataController;
use App\Http\Controllers\Umkm\UmkmController;


Route::get('/', function () {
    return view('home');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/wilayah', function () {
    return view('wilayah');
});
Route::get('/kirimsaran', function () {
    return view('kirimsaran');
});

Route::resource('wisata', WisataController::class);
Route::resource('umkm', UmkmController::class);
