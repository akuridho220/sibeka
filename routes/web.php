<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengajuanController;

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

// Route for All
Route::get('/', function () {
    return view('landing-page');
});

//Register
Route::get('/register', [RegisterController::class, 'index'])->name('login')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route Pengajuan
Route::get('/konseli-pendaftaran', [PengajuanController::class, 'create'])->middleware('auth');
Route::post('/pendaftaran', [PengajuanController::class, 'buatPengajuan'])->middleware('auth');
//Route::resource('/pendaftaran/posts', [PengajuanController::class, 'approve'])->middleware('auth');
Route::resource('/pendaftaran/pengajuans', PengajuanController::class)->middleware('auth');
Route::patch('/resubmit/{id}', [PengajuanController::class, 'resubmit'])->middleware('auth');
Route::patch('/approve/{id}', [PengajuanController::class, 'approve'])->middleware('auth');

// Route Laporan
Route::resource('/pendaftaran/laporans', LaporanController::class)->middleware('auth');



// Route Konseli
Route::get('/konseli', [UserController::class, 'konseli'])->middleware('auth');
Route::get('/konseli-riwayat', [LaporanController::class,'showLaporanKonseli'])->middleware('auth');

// Route for Konselor
Route::get("/konselor", [UserController::class,"konselor"])->middleware('auth');
Route::get('/konselor-laporan/{id}', [LaporanController::class, 'index'])->middleware('auth');
Route::post('/konselor-laporan/{id}', [LaporanController::class, 'createLaporan'])->middleware('auth');


Route::get('/konselor-riwayat', [LaporanController::class, 'showLaporanKonselor'])->middleware('auth');

// Route for Team
Route::get('/tim', [UserController::class, 'home'])->name('tim-konseling.home-tim-konseling');

Route::get('/tim-pengajuan', [PengajuanController::class, 'index']);

// Route for Pimpinan
Route::get('/pimpinan', [UserController::class, 'index']);





