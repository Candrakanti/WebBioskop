<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun_bank_table extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_bank';
    protected $keyType = 'string';
    protected $table = "akun_bank_table";
    protected $fillable = [
        'id_bank',
        'id_admin',
        'saldo',
    ];
}
