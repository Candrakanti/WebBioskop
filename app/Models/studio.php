<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "studio";
    protected $fillable = [
        'id_studio',
        'id_jenis_studio',
        'audiotori',
        'jumlah_kursi',
    ];

    // public function studio()
    // {
    //     // return $this->hasOneThrough(App\Models\jadwal::class, App\Models\studio::class);
    //     // return $this->hasManyThrough(related: jadwal::class, through: studio::class);
    //     // return $this->belongsTo(related: jadwal::class);
    //     return $this->belongsTo(related: jadwal::class);
    // }

    public function jadwal()
    {
        return $this->hasMany('App\Models\jadwal');
    }
}
