<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController; 
use App\Http\Controllers\HomeController;  
use App\Http\Controllers\PageController;

Route::get('/tes', function () {
    return '<h1>Halaman Tes Berhasil</h1>';
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ===== HALAMAN DEPAN & HALAMAN STATIS LAINNYA =====
Route::get('/', function () {
    return view('welcome');
});

Route::get('/phenomenon', function () {
    return view('phenomenon');
});

Route::get('/guide', function () {
    return view('guide');
});

Route::get('/trip', function () {
    return view('trip');
});

Route::get('/gallery', [PageController::class, 'gallery']);

Route::get('/tes-peta', function () {
    return view('tes-peta');
});


// ===== ROUTE OTENTIKASI & ADMIN =====
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route publik untuk menampilkan satu cerita
Route::get('/stories/{story}', [StoryController::class, 'show'])->name('stories.show');

// Grup route admin sekarang dijaga oleh 'auth'
Route::middleware(['auth'])->group(function () {
    Route::resource('admin/stories', StoryController::class)->except(['show']);
});


