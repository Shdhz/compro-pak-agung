<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('compro.pages.home');
})->name('home');

Route::prefix('profil')->group(function () {

    Route::get('/tentang-kami', function () {
         return view('compro.pages.profile');
    })->name('profil.tentang-kami');
    Route::get('/guru-staff', function () {
         return view('compro.pages.employee');
    })->name('profil.tenaga-pendidik');

});

Route::get('berita', function(){
    return view('compro.pages.news');
})->name('berita');

Route::get('berita/detail-berita', function(){
    return view('compro.pages.detail_news');
})->name('berita.detail');

Route::get('galeri', function(){
    return view('compro.pages.gallery');
})->name('galeri');

Route::get('info-ppdb', function(){
    return view('compro.pages.ppdb_info');
})->name('info-ppdb');