<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CgvController extends Controller
{
    public function index()
    {
        return view('profil.index', [
            "title" => "mycgv",
            "active" => "mycgv"
        ]);
    }
}
