<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _detail_jam extends Model
{
    use HasFactory;
    protected $table = "detail_jam";
    public $timestamps = false;
    protected $primaryKey = 'id_jadwal';
    protected $keyType = 'string';

    protected $fillable = [
        
        'id_det_jam',
        'id_db',
        'id_bioskop',
        'id_jadwal',
        'jam_tayang',
    
    ];

}
