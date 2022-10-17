<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_studio extends Model
{
    use HasFactory;
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
}
