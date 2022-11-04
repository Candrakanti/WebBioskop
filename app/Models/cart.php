<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $table = "cart";
    protected $fillable = [
        'id',
        'user_id',
        'id_film',
        'harga',
        'created_at',
        'updated_at',

    ];
}
