<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('movie.index', [
            "title" => "movie",
            "active" => "movie"
        ]);
    }
}
