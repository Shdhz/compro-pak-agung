<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('compro.pages.home');
});

Route::prefix('profil')->group(function () {

    Route::get('/tentang-kami', function () {
         return view('compro.pages.profile');
    })->name('profil.tentang-kami');
    Route::get('/tenaga-pendidik', function () {
         return view('compro.pages.employee');
    })->name('profil.tenaga-pendidik');

});
