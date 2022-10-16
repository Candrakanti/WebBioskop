<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\jadwal;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->get(['jadwal.*', 'film.*']);

        return view('movie.index', compact('data'), [
            'title' => 'movie',
            'active' => 'movie'
        ]);
    }
    // public function index()
    // {
    //     $films = Film::all();
    //     return view('movie.index', compact('films'), [
    //         'title' => 'Movie',
    //         'active' => 'Movie',        
    // ]);
    // }
}
