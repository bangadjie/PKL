<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/login', function () {
    return view('login');
});