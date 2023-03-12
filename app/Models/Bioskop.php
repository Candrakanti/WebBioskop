<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Facades\DB;

class Bioskop extends Model
{
    use HasFactory;
    use LogsActivity;
    public $timestamps = false;
    protected $primaryKey = 'id_bioskop';
    protected $keyType = 'string';
    protected $table = "bioskop";
    protected $fillable = [
        'id_bioskop',
        'nama_bioskop',
        'alamat',
       

    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable('*');
        // Chain fluent methods for configuration options
    }
}
