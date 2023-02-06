<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

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
        'payment_type',
        'harga',
        'status_bayar',
        // 'bukti_bayar'
    ];

}


