<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $data =  Film::all();
        return view('movie.index', compact('data'),  [
            'title' => 'Movie',
            'active' => 'Movie',
            'posts' => Film::all()
        ]);
    }
}
