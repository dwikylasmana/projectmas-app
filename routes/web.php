<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleriController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/akun', function () {
    return view('akun', [
        "title"=>"Akun Saya",
        "active"=> "akun"
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
        "title"=>"Home",
        "active"=> "home"
    ]);
});

Route::get('/riwayat', function () {
    return view('riwayat', [
        "title"=>"Riwayat Projek",
        "active"=> "riwayat"
    ]);
});

/*Berita & Kategori - Dynamic */
Route::get('/berita', [NewsController::class, 'index']);
Route::get('/berita/{halaman:slug}', [NewsController::class, 'single']);

Route::get('/kategori_berita', [CategoryController::class, 'show']);
Route::get('/berita/kategori/{category:slug}', [CategoryController::class, 'find']);


/*Gallery - Dynamic */
Route::get('/galeri', [GalleriController::class, 'index']);
Route::get('/galeri/{details:slug}', [GalleriController::class, 'single']);

/*Visi & Misi - Static */
Route::get('/visi_misi', function () {
    return view('visi_misi', [
        "title"=> "Visi & Misi",
        "active"=> "visi_misi"
    ]);
});

/*About US - Static */
Route::get('/about', function () {
    return view('tentang', [
        "title"=>"Tentang Kami",
        "active"=>"about"
    ]);
});
