<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "film";
    protected $fillable = [
        'id_film',
        'id_jadwal',
        'judul_film',
        'jenis_film',
        'produser',
        'sutradara',
        'penulis',
        'cast',
        'sinopsis',
        'link_trailer',
        'image',
    ];
}
