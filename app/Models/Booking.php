<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

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
        // 'id_payment',
        'id_jadwal',
        'tanggal_booking',
        'kursi',
        'jumlah_kursi',
        'harga',
        'status_bayar',
        // 'qr_tiket',
    
    ];

        public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id_booking= IdGenerator::generate(['table' => 'booking', 'length' => 11, 'prefix' =>'BKL-']);
        });
    }
}
