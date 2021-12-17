<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleriController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Models\Galleri;
use App\Models\Category;


Route::get('/login', function () {
    return view('login', [
        "title"=>"Login"
    ]);
});

Route::get('/akun', function () {
    return view('akun', [
        "title"=>"Akun Saya"
    ]);
});

//Redirect jika belum login ke halaman welcome
Route::get('/welcome', function () {
    return view('welcome', [
        "title"=>"Selamat Datang"
    ]);
});

Route::get('/home', function () {
    return view('homepage_klien', [
        "title"=>"Home"
    ]);
});

Route::get('/riwayat', function () {
    return view('riwayat', [
        "title"=>"Riwayat Projek"
    ]);
});

Route::get('/projek', function () {
    return view('riwayat', [
        "title"=>"Riwayat Projek"
    ]);
});

/*Berita - Dynamic */
Route::get('/berita', [NewsController::class, 'index']);
Route::get('/berita/{halaman:slug}', [NewsController::class, 'single']);

Route::get('/berita/kategori', [CategoryController::class, 'show']);
Route::get('/berita/kategori/{category:slug}', [CategoryController::class, 'find']);


/*Gallery - Dynamic */
Route::get('/galeri', [GalleriController::class, 'index']);
Route::get('/galeri/{details:slug}', [GalleriController::class, 'single']);

/*Visi & Misi - Static */
Route::get('/visi_misi', function () {
    return view('visi_misi', [
        "title"=>"Visi & Misi"
    ]);
});

/*About US - Static */
Route::get('/about', function () {
    return view('tentang', [
        "title"=>"Tentang Kami",
    ]);
});