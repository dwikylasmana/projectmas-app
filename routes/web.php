<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleriController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashAkun;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashbboardController;
use App\Http\Controllers\DashDaftar;
use App\Http\Controllers\DashGallery;
use App\Http\Controllers\DashJadwal;
use App\Http\Controllers\DashNews;
use App\Http\Controllers\DashPengajuan;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LOI;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Pengajuan;
use App\Http\Controllers\PengajuanController;

//-------------------------------------------------------------------------------
//ADMIN AREA

/*Dashboard Panel */
Route::get('/dashboard', [DashbboardController::class, 'index'])->name('dashboard')->middleware('isAdmin');
Route::resource('galleri', DashGallery::class)->middleware('isAdmin');
Route::resource('daftar', DashDaftar::class)->middleware('isAdmin');
Route::resource('akun', DashAkun::class)->middleware('isAdmin');
Route::resource('jadwal', DashJadwal::class)->middleware('isAdmin');
Route::resource('pengajuan', DashPengajuan::class)->middleware('isAdmin');
Route::get('pengajuan/download', [PengajuanController::class, 'download'])->middleware('isAdmin');


Route::resource('news', DashNews::class)->middleware('isAdmin');
Route::post('/dashboard/berita/store', [DashNews::class, 'store'])->middleware('isAdmin');
Route::get('/dashboard/berita/create', [DashNews::class, 'create'])->middleware('isAdmin');
Route::get('/dashboard/berita/{news:slug}', [DashNews::class, 'show'])->middleware('isAdmin');
Route::resource('/dashboard/berita', DashNews::class)->middleware('isAdmin');

//-------------------------------------------------------------------------------
//WELCOME AREA (GUEST ONLY)
Route::get('/home', function () {
    return view('homepage_', [
        "title"=> "Visi & Misi",
        "active"=> "home"
    ]);
})->middleware('auth');

/*Login & Logout */
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

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

/*Jadwal */
Route::get('/jadwalsaya', [JadwalController::class, 'index'])->middleware('auth');

/*Pengajuan */
Route::resource('pengajuanloi', LOI::class)->middleware('auth');

/*Gallery */
Route::get('/galeri', [GalleriController::class, 'index'])->middleware('auth');
Route::get('/galeri/{details:slug}', [GalleriController::class, 'single'])->middleware('auth');

/*Akun*/
Route::resource('acc', AccController::class)->middleware('auth');

/*Pendafataran*/
Route::resource('pendaftaran', PendaftaranController::class)->middleware('auth');

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
});