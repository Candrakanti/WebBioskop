<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_kota';
    protected $keyType = 'string';
    protected $table = "kota";
    protected $fillable = [
        'id_kota',
        'kota',
        'detail_kota',
    ];
    protected $casts = [
        'detail_kota' => 'array'
    ];
}
