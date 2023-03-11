<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    private static   $warna_ready = [
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

    public static function warna()
    {
        //untuk memanggil static menggunakan self::
        //coollection membungkus array agar lebih sakti
        return collect(self::$warna_ready);
    }
}
