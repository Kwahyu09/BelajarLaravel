<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nama',
    //     'email',
    //     'image',
    // ];
    protected $guarded = ['id'];
}
