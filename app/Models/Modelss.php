<?php

namespace App\Models;

class Modelss
{
    private static  $model = [
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

    public static function all()
    {
        //untuk memanggil static menggunakan self::
        //coollection membungkus array agar lebih sakti
        return collect(self::$model);
    }

    public static function find($slug)
    {
        $model = static::all();
        // $new_model = [];
        // foreach( $post as $mod){
        //     if($mod["slug"] === $slug){
        //         $new_model = $mod;
        //     }
        // }

        //fristwahre method bawaan yang mengambil data dimana kondisi slug sama dengan slug
        return $model->firstWhere('slug',$slug);
    }
}
