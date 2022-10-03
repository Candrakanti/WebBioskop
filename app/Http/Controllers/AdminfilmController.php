<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminfilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('film.index');
    }
    // public function crud()
    // {

    //     return view('film.template.home' );

    // }

    public function input()
    {
        return view('film.input');
    }
}
