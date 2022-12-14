<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_jadwal';
    protected $keyType = 'string';
    protected $table = "jadwal";
    protected $fillable = [
        'id_jadwal',
        'id_studio',
        'id_film',
        'tgl_tayang_awal',
        'tgl_tayang_akhir',
        'jam_tayang',
    ];

    protected $casts = [
        'jam_tayang' => 'array'
    ];
}
