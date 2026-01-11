<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Compro\ComproController;
use Illuminate\Support\Facades\Route;

Route::controller(ComproController::class)->name('compro.')->middleware('school')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::prefix('profil')->group(function () {
        Route::get('tentang-kami', 'aboutUs')->name('about-us');
        Route::get('tenaga-pendidik', 'teacher')->name('teacher');
    });
    Route::get('berita', 'news')->name('news');
    Route::get('berita/{slug}', 'readNews')->name('read-news');
    Route::get('galeri', 'gallery')->name('gallery');
    Route::get('load-more-galeri', 'loadMore')->name('load-more');
    Route::get('info-ppdb', 'infoPPDB')->name('info-ppdb');
});

Route::controller(LoginController::class)->middleware('guest')->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'createSession')->name('create-session');
});
Route::post('logout', LogoutController::class)->middleware('auth')->name('logout');

// admin
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('setting', SettingController::class)->only(['index', 'edit', 'update']);
    Route::resource('teacher', TeacherController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('facility', FacilityController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('news', NewsController::class);
    Route::controller(AdminController::class)->group(function () {
        Route::get('edit-profile', 'editProfile')->name('profile');
        Route::put('edit-profile', 'updateProfile')->name('update-profile');
        Route::put('edit-password', 'updatePassword')->name('update-password');
    });
});
