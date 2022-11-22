<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "bank";
    protected $primaryKey = 'id_bank';
    protected $keyType = 'string';
    protected $fillable = [

        'id_bank',
        'nama_bank'
    ];
}
