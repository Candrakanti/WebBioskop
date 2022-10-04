<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudJadwal extends Model
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
}
