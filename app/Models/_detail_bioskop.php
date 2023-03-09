<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class _detail_bioskop extends Model
{
    use HasFactory;
    use LogsActivity;
    protected $table = "detail_bioskop";
    public $timestamps = false;
    protected $primaryKey = 'id_db';
    protected $keyType = 'string';

    protected $fillable = [
        'id_db',
        'id_bioskop',
        'id_jadwal',
    
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable('*');
        // Chain fluent methods for configuration options
    }

}
