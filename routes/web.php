<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/umkm', function (){
    return view('umkm');
});

Route::get('/wisata', function (){
    return view('wisata');
});

Route::get('/wilayah', function (){
    return view('wilayah');
});

Route::get('/tentangkami', function (){
    return view('tentangkami');
});