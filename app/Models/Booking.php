<?php

namespace App\Models;

use App\Models\payment;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    use LogsActivity;
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
    
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*']);
        // Chain fluent methods for configuration options
    }


    public static function getCustomerTicketCount()
    {
        $result = DB::select("CALL buy" );
        return $result;
    }


    //  protected $casts = [
    //     'kursi' => 'array',
    // ];

}
