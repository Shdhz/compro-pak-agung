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

Route::get('/', function () {
    return view('compro.pages.home');
})->name('home');

Route::prefix('profil')->group(function () {

    Route::get('/tentang-kami', function () {
         return view('compro.pages.profile');
    })->name('profil.tentang-kami');
    Route::get('/tenaga-pendidik', function () {
         return view('compro.pages.employee');
    })->name('profil.tenaga-pendidik');

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
