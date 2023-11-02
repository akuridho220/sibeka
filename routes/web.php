<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('landing-page', [
        "title" => "Home",
        "user" => "Konseli"
    ]);
});


// Route for Konseli
Route::get('/konseli', function () {
    return view('konseli/home-konseli-1', [
        "title" => "Home",
        "user" => "Konseli"
    ]);
});

Route::get('/konseli-pendaftaran', function () {
    return view('konseli/pendaftaran-konseli', [
        "title" => "Pendaftaran",
        "user" => "Konseli"
    ]);
});

Route::get('/konseli-riwayat', function () {
    return view('konseli/riwayat-konseli', [
        "title" => "Riwayat",
        "user" => "Konseli"
    ]);
});

// Route for Konselor
Route::get('/konselor', function () {
    return view('konselor/home-konselor', [
        "title" => "Home",
        "user" => "Konselor"
    ]);
});

Route::get('/konselor-laporan', function () {
    return view('konselor/laporan', [
        "title" => "Laporan",
        "user" => "Konselor"
    ]);
});

Route::get('/konselor-riwayat', function () {
    return view('konselor/riwayat-konselor', [
        "title" => "Riwayat",
        "user" => "Konselor"
    ]);
});

// Route for Team
Route::get('/tim', [UserController::class, 'index'])->name('tim-konseling.home-tim-konseling');

Route::get('/tim-pengajuan', function () {
    return view('tim-konseling/home-tim-konseling', [
        "title" => "Home",
        "user" => "Tim Konseling"
    ]);
});

// Route for Pimpinan
Route::get('/pimpinan', function () {
    return view('pimpinan/home-pimpinan', [
        "title" => "Home",
        "user" => "Pimpinan"
    ]);
});




