<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleriController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashbboardController;
use App\Http\Controllers\DashDaftar;
use App\Http\Controllers\DashGallery;
use App\Http\Controllers\DashNews;


Route::resource('galleri', DashGallery::class)->middleware('auth');
Route::resource('daftar', DashDaftar::class)->middleware('auth');


Route::resource('news', DashNews::class)->middleware('auth');
Route::post('/dashboard/berita/store', [DashNews::class, 'store'])->middleware('auth');
Route::get('/dashboard/berita/create', [DashNews::class, 'create'])->middleware('auth');
Route::get('/dashboard/berita/{news:slug}', [DashNews::class, 'show'])->middleware('auth');
Route::resource('/dashboard/berita', DashNews::class)->middleware('auth');

//-------------------------------------------------------------------------------
//WELCOME AREA
/*Welcome */
Route::get('/welcome', function () {
    return view('welcome', [
        "title"=>"Selamat Datang"
    ]);
})->middleware('guest');

/*Home - Guest & Klien */
Route::get('/home', function () {
    return view('homepage_klien', [
        "title"=>"Home",
        "active"=> "home"
    ])->name('home');
});

/*Login & Logout */
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/acc', [AccController::class, 'index'])->middleware('auth');

/*Register */
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'save'])->middleware('guest');


//-------------------------------------------------------------------------------
//KLIEN AREA

/*Berita & Kategori */
Route::get('/berita', [NewsController::class, 'index'])->middleware('auth');
Route::get('/berita/{halaman:slug}', [NewsController::class, 'single'])->middleware('auth');

Route::get('/kategori_berita', [CategoryController::class, 'show'])->middleware('auth');
Route::get('/berita/kategori/{category:slug}', [CategoryController::class, 'find'])->middleware('auth');


/*Gallery */
Route::get('/galeri', [GalleriController::class, 'index'])->middleware('auth');
Route::get('/galeri/{details:slug}', [GalleriController::class, 'single'])->middleware('auth');

/*Riwayat Projek*/
Route::get('/riwayat', function () {
    return view('riwayat', [
        "title"=>"Riwayat Projek",
        "active"=> "riwayat"
    ]);
})->middleware('auth');

/*Visi & Misi */
Route::get('/visi_misi', function () {
    return view('visi_misi', [
        "title"=> "Visi & Misi",
        "active"=> "visi_misi"
    ]);
})->middleware('auth');

/*About US */
Route::get('/about', function () {
    return view('tentang', [
        "title"=>"Tentang Kami",
        "active"=>"about"
    ]);
})->middleware('auth');


//-------------------------------------------------------------------------------
//ADMIN AREA

Route::get('/dashboard', [DashbboardController::class, 'index'])->name('dashboard')->middleware('auth');

