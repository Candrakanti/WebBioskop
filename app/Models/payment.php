<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

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
        'harga',
        'status',
        'image'
    ];

    public function payment(){
        return $this->belongsTo('booking', 'id_booking');
    }
    public static function boot()
    {
        parent::boot();
    
        self::creating(function ($model) {
            $model->id_payment= IdGenerator::generate(['table' => 'payment', 'length' => 10, 'prefix' =>'INV-']);
        });
    }
}
