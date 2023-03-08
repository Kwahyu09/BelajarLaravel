<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/owner', function () {
    return view('owner', [
        "title" => "Owner",
        "nama" => "Krisna Wahyudi",
        "email" => "krisnawahyudi2017@gmail.com",
        "image" => "krisna.png"
    ]);
});

Route::get('/pesan', function () {
    return view('pesan',[
        "title" => "Pemesanan"
    ]);
});

Route::get('/warna', function () {
    return view('warna',[
        "title" => "Warna Ready"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar',[
        "title" => "Daftar Harga"
    ]);
});