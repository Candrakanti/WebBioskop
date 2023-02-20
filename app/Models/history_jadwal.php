<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history_jadwal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_jadwal';
    protected $keyType = 'string';
    protected $table = "history_jadwal";
    protected $fillable = [
        'id_jadwal',
        'id_studio',
        'id_film',
        'tgl_tayang_awal',
        'tgl_tayang_akhir',
    ];
}
