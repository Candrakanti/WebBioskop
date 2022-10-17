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

    // public function film()
    // {
    //     // return $this->hasOneThrough(App\Models\jadwal::class, App\Models\studio::class);
    //     // return $this->hasManyThrough(related: jadwal::class, through: studio::class);

    //     //  YANG GA EERROR
    //     // return $this->belongsTo(related: jadwal::class);

    //     return $this->hasMany(related: jadwal::class);
    // }

    public function jadwal()
    {
        return $this->hasMany('App\Models\jadwal');
    }
}
