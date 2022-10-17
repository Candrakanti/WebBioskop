<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "film";
    protected $primaryKey = 'id_film';
    protected $keyType = 'string';
    protected $fillable = [
        'id_film', 'judul_film', 'jenis_film', 'producer', 'sutradara', 'penulis', 'cast', 'link_trailer', 'image', 'sinopsis'
    ];
}
