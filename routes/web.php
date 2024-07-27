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

// Routes for creating, storing, editing, updating, destroying with middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('umkm', UmkmController::class)->except(['index', 'show']);
    Route::resource('wisata', WisataController::class)->except(['index', 'show']);
});

Route::get('umkm', [UmkmController::class, 'index'])->name('umkm.index');
Route::get('umkm/{umkm}', [UmkmController::class, 'show'])->name('umkm.show');

Route::get('wisata', [WisataController::class, 'index'])->name('wisata.index');
Route::get('wisata/{wisata}', [WisataController::class, 'show'])->name('wisata.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('/dashboard');
    })->name('dashboard');
});
