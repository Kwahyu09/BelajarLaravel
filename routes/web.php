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
    $warna_ready = [
    [
        "id" => "",
        "judul" => "SILVER",
        "slug" => "silver",
        "warna" => "silver",
        "status" => "Ready"
    ],
    [
        "id" => "",
        "judul" => "PINK",
        "slug" => "pink",
        "warna" => "pink",
        "status" => "Ready"
    ],
    [
        "id" => "",
        "judul" => "Ungu",
        "slug" => "ungu",
        "warna" => "ungu",
        "status" => "Ready"
    ],
    [
        "id" => "",
        "judul" => "Biru Makaron",
        "slug" => "biru-mak",
        "warna" => "birumak",
        "status" => "Habis"
    ]
];
    return view('warna',[
        "title" => "Warna Ready",
        "posts" => $warna_ready
    ]);
});

Route::get('/daftar', function () {
     $model = [
    [
        "id" => "",
        "judul" => "Buket Biasa 15 Tangkai",
        "slug" => "buket-biasa-15",
        "photo" => "hadiat.png",
        "harga" => "60.000"
    ],
    [
        "id" => "",
        "judul" => "Buket Biasa 25 Tangkai",
        "slug" => "buket-biasa-25",
        "photo" => "hadiat.png",
        "harga" =>"100.000"
    ]
    ];
    return view('daftar',[
        "title" => "Daftar Harga",
        "models" => $model
    ]);
});

Route::get('/detail/{slug}', function ($slug) {
    $model = [
    [
        "id" => "",
        "judul" => "Buket Biasa 15 Tangkai",
        "slug" => "buket-biasa-15",
        "photo" => "hadiat.png",
        "harga" => "60.000",
        "jum-tang" => 15,
        "jum-kel" => 15
    ],
    [
        "id" => "",
        "judul" => "Buket Biasa 25 Tangkai",
        "slug" => "buket-biasa-25",
        "photo" => "hadiat.png",
        "harga" =>"100.000",
        "jum-tang" => 25,
        "jum-kel" => 25
    ]
    ];

    $new_model = [];
    foreach( $model as $mod){
        if($mod["slug"] === $slug){
            $new_mod = $mod;
        }
    }

    return view('detail',[
        "title" => "Detail Buket",
        "model" => $new_mod
    ]);
});