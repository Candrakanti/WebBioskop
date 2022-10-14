<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_jadwal';
    protected $keyType = 'string';
    protected $table = "jadwal";
    protected $fillable = [
        'id_jadwal',
        'id_studio',
        'id_film',
        'tgl_tayang_awal',
        'tgl_tayang_akhir',
        'jam_tayang',
        'jam_tayang1',
    ];

    protected $casts = [
        'jam_tayang1' => 'array'
    ];

    public function setjamtayang1Attribute($value)
    {
        $jam_tayang1 = [];

        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $jam_tayang1[] = $array_item;
            }
        }

        $this->attributes['jam_tayang1'] = json_encode($jam_tayang1);
    }
    public function studio()
    {
        return $this->belongsTo('App\Models\studio');
    }
    public function film()
    {
        return $this->belongsTo('App\Models\Film');
    }
}
