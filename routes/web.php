<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusPolinema;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [KampusPolinema::class, 'home']);

Route::get('/tentang', [KampusPolinema::class, 'tentang']);

Route::get('/akademik', [KampusPolinema::class, 'akademik']);

Route::get('/berita', [KampusPolinema::class, 'berita']);

Route::get('/kontak', [KampusPolinema::class, 'kontak']);