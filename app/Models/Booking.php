<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "booking";
    public $timestamps = false;
    protected $primaryKey = 'id_booking';
    protected $keyType = 'string';

    protected $fillable = [
        'id_booking',
        'id_customer',
        'id_payment',
        'id_jadwal',
        'tanggal_booking',
        'jumlah_kursi',
        'qr_tiket',
        'total_harga',
    ];
}
