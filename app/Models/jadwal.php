<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "jadwal";
    protected $fillable = [
        'id_jadwal',
        'id_studio',
        'id_film',
        'tgl_tayang_awal',
        'tgl_tayang_akhir',
        'jam_tayang',
    ];

    // public function jadwal()
    // {
    //     return $this->hasMany(related: jadwal::class);
    // }

    // public function jadwals()
    // {
    //     // return $this->hasMany(related: jadwal::class);
    //     return $this->hasManyThrough(related: Film::class, through: jadwal::class);

    //     // return $this->hasMany(App\Models\film::class);
    // }

    public function Film()
    {
        return $this->belongsTo('App\Models\Film' , 'id_film', 'judul_film',);
    }

    public function studio()
    {
        return $this->belongsTo('App\Models\studio' ,'id_studio', 'audiotori');
    }

}
