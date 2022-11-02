<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "payment";
    protected $primaryKey = 'id_payment';
    protected $keyType = 'string';
    protected $fillable = [

        'id_payment',
        'id_booking',
        'jenis_payment',
        'jumlah_bayar',
        'status',
    ];
}
