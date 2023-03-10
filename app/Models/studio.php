<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class studio extends Model
{
    use HasFactory;
    use LogsActivity;
    public $timestamps = false;
    protected $primaryKey = 'id_studio';
    protected $keyType = 'string';
    protected $table = "studio";
    protected $fillable = [
        'id_studio',
        'id_jenis_studio',
        'audiotori',
        'jumlah_row',
        'jumlah_kursi_perrow',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable('*');
        // Chain fluent methods for configuration options
    }

}
