<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movie.index', [
            'title' => 'Movie',
            'active' => 'Movie',
            'posts' => Film::all()
        ]);
    }
}
