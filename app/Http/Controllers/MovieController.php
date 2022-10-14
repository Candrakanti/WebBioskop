<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movie.index', [
<<<<<<< HEAD
            "title" => "Movie",
            "active" => "Movie"
=======

            'title' => 'Movie',
            'active' => 'Movie',
            'posts' => Film::all()

>>>>>>> 7b7a364158e15447fc29c2f0ed4d31437c7c61e1
        ]);
    }
}
