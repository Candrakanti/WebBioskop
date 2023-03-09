<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class _detail_jam extends Model
{
    use HasFactory;
    use LogsActivity;
    protected $table = "detail_jam";
    public $timestamps = false;
    protected $primaryKey = 'id_jadwal';
    protected $keyType = 'string';

    protected $fillable = [
        
        'id_det_jam',
        'id_db',
        'id_bioskop',
        'id_jadwal',
        'jam_tayang',
    
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable('*');
        // Chain fluent methods for configuration options
    }

}
