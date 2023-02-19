<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisFilm extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "jenis_film";
    protected $fillable = [
    'id_film', 'jenis'];
}
