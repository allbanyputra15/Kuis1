<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusPolinema;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [KampusPolinema::class, 'home'])
    ->name('home');

Route::get('/tentang', [KampusPolinema::class, 'tentang'])
    ->name('tentang');

Route::get('/akademik', [KampusPolinema::class, 'akademik'])
    ->name('akademik');

Route::get('/berita', [KampusPolinema::class, 'berita'])
    ->name('berita');

Route::get('/kontak', [KampusPolinema::class, 'kontak'])
    ->name('kontak');
