<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _detail_bioskop extends Model
{
    use HasFactory;
    protected $table = "_detail_bioskop";
    public $timestamps = false;

    protected $fillable = [
        'id_db',
        'id_bioskop',
        'id_jadwal',
    
    ];

}
