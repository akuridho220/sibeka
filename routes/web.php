<?php

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
    return view('landing-page', [
        "title" => "Home",
        "user" => "Konseli"
    ]);
});

Route::get('/home-konseli', function () {
    return view('konseli/home-konseli-1', [
        "title" => "Home",
        "user" => "Konseli"
    ]);
});

Route::get('/riwayat-konseli', function () {
    return view('riwayat-konseli', [
        "title" => "Riwayat",
        "user" => "Konseli"
    ]);
});

Route::get('/riwayat-konselor', function () {
    return view('riwayat-konselor', [
        "title" => "Riwayat",
        "user" => "Konselor"
    ]);
});
