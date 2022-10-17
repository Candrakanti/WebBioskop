<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\studio;
use App\Models\jadwal;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
            ->get(['film.*', 'jadwal.*']);
        return view('movie.index', compact('data'), [
            'title' => 'Movie',
            'active' => 'Movie',

        ]);
    }
}
