<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelssController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\WarnaController;

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
Route::get('/pesan', function () {
    return view('pesan',[
        "title" => "Pemesanan"
    ]);
});
Route::get('/warna', [WarnaController::class, 'index']);
Route::get('/daftar', [ModelssController::class, 'index']);
Route::get('/detail/{modelss:slug}', [ModelssController::class, 'show']);
Route::get('/owner',[OwnerController::class,'index']);