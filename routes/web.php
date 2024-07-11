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

Route::get('/tentang-kami', function () {
    return view('tentangkami');
});

Route::get('/wilayah', function () {
    return view('wilayah');
});
