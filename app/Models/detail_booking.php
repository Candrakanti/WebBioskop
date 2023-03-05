<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_booking extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_booking';
    protected $keyType = 'string';
    protected $table = "detail_booking";
    protected $fillable = [
        'id_booking',
        // 'row',
        // 'seat',
        'kursi',
        'harga',
    ];
//   protected $casts = [
//         'kursi' => 'array',

//     ];
}
