<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_log extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $table = "activity_log";
    protected $fillable = [
      'id',
      'log_name',
      'description',
      'causer_id',
      'created_at',
      'updated_at',
      
    ];
}