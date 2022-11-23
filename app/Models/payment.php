<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "payment";
    protected $primaryKey = 'id_payment';
    protected $keyType = 'string';
    protected $fillable = [

        'id_payment',
        'id_booking',
        'id_bank',
        'id_customer',
        'harga',
        'status',
        'image'
    ];


    public function bank()
    {
        return $this->hasMany('App\Models\bank');
    }

    
    //     public static function boot()
    // {
    //     parent::boot();
    //     // self::creating(function ($model) {
    //     //     $model->akun= IdGenerator::generate(['table' => 'users', 'length' => 11, 'prefix' =>'CST-'.date('dmy')]);
    //     // });
    // }
}


