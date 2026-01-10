<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Compro\ComproController;
use Illuminate\Support\Facades\Route;

Route::controller(ComproController::class)->name('compro.')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::prefix('profil')->group(function(){
        Route::get('tentang-kami', 'aboutUs')->name('about-us');
        Route::get('tenaga-pendidik', 'teacher')->name('teacher');
    });
    Route::get('berita', 'news')->name('news');
    Route::get('berita/{slug}', 'readNews')->name('read-news');
    Route::get('galeri', 'gallery')->name('gallery');
    Route::get('info-ppdb', 'infoPPDB')->name('info-ppdb');
});

// admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
