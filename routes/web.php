<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/umkm', function () {
    return view('umkm');
});

Route::get('/wisata', function () {
    return view('wisata');
});

Route::get('/wilayah', function () {
    return view('wilayah');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/saran', function () {
    return view('kirimsaran');
});
