<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_kota extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "detail_kota";
    protected $fillable = [
        'id_detail_kota',
        'mall',
        'alamat',
    ];
}
