<?php

use App\Http\Controllers\KampusPolinema;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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
});

require __DIR__.'/auth.php';
