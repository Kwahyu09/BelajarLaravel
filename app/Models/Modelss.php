<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelss extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'judul',
    //     'photo',
    //     'harga',
    //     'jum-kel',
    //     'jum-tang',
    // ];

    protected $guarded = ['id'];
}
