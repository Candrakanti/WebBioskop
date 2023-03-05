<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\payment;

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
        'tenggat_bayar',
        'tanggal_booking',
        'jam_booking',
        'kursi',
        'jumlah_kursi',
        'harga',
        'jumlah',
        'qr_tiket',
        'created_at',
    
    ];

    //  protected $casts = [
    //     'kursi' => 'array',
    // ];

}
