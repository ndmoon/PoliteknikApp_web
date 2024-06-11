<?php

use App\Http\Controllers\BeritaBackendController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DosenBackendController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KategoriBackendController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaBackendController;
use App\Http\Controllers\ProdiBackendController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserBackendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/prodi', function() {
    return view ('akademik.prodi');
})->name('prodi');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'register'])->name('register')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

//Route::get('/backend', [BackendController::class, 'index'])->middleware('auth');

Route::get('/backend', function () {
    return view ('backend.index');
})->middleware('auth');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

Route::get('/berita/{id}', [BeritaController::class, 'show']);

Route::resource('mahasiswa-backend', MahasiswaBackendController::class);

Route::resource('dosen-backend', DosenBackendController::class);

Route::resource('prodi-backend', ProdiBackendController::class);

Route::resource('berita-backend', BeritaBackendController::class)->middleware('Admin');

Route::resource('kategori-backend', KategoriBackendController::class);

Route::resource('user-backend', UserBackendController::class);