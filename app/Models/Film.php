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

        'id_film',
        'id_jadwal',
        'judul_film',
        'jenis_film',
        'producer',
        'sutradara',
        'penulis',
        'cast',
        'sinopsis',
        'link_trailer',
        'image',
    ];

    // public function film()
    // {
    //     // return $this->hasOneThrough(App\Models\jadwal::class, App\Models\studio::class);
    //     // return $this->hasManyThrough(related: jadwal::class, through: studio::class);

    //     //  YANG GA EERROR
    //     // return $this->belongsTo(related: jadwal::class);

    //     return $this->hasMany(related: jadwal::class);
    // }
    // 'id_film', 'judul_film', 'jenis_film', 'produser', 'sutradara', 'penulis', 'cast', 'link_trailer', 'image', 'sinopsis'];


    // 'id_film', 'judul_film', 'jenis_film', 'producer', 'sutradara', 'penulis', 'cast', 'link_trailer', 'image', 'sinopsis'];


    //     'id_film', 'judul_film', 'jenis_film', 'producer', 'sutradara', 'penulis', 'cast', 'link_trailer', 'image', 'sinopsis'
    // ];


    public function jadwal()
    {
        return $this->hasMany('App\Models\jadwal');
    }

    public function JenisFilm()
    {
        return $this->hasOne(JenisFilm::class, 'id_jenis', 'JenisFilm');
    }
}
