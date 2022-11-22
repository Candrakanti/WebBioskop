<?php

namespace App\Http\Controllers;

use App\Models\JenisFilm;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {

        $data = JenisFilm::all();
        return view('film.template.tampil', compact('data'), [
            'title' => 'Admin Film',
            'active' => 'Admin Film',
            'pages' => 'Data Jenis Film',
        ]);
    }
}
