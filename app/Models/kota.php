<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_bioskop';
    protected $keyType = 'string';
    protected $table = "bioskop";
    protected $fillable = [
        'id_bioskop',
        'nama_bioskop',
    ];    
}
