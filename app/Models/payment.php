<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class payment extends Model
{
    use HasFactory;
    use LogsActivity;
    public $timestamps = false;
    protected $table = "payment";
    protected $primaryKey = 'id_payment';
    protected $keyType = 'string';
    protected $fillable = [

        'id_payment',
        'id_booking',
        'nama_bank',
        'harga',
        'status_bayar',
       
        // 'bukti_bayar'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*']);
        // Chain fluent methods for configuration options
    }

    //   public static function getCustomerTicketCount()
    // {
    //     $result = DB::select("CALL CustomerPaid");
    //     return $result;
    // }
}


