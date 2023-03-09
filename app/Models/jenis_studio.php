<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class jenis_studio extends Model
{
    use HasFactory;
    use LogsActivity;
    public $timestamps = false;
    protected $primaryKey = 'id_jenis_studio';
    protected $keyType = 'string';
    protected $table = "detail_jenis_studio";
    protected $fillable = [
        'id_jenis_studio',
        'jenis_studio',
        'harga',
    ];

    public function jadwal()
    {
        return $this->hasMany('App\Models\jadwal');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable('*');
        // Chain fluent methods for configuration options
    }
}
