<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\kota;
use App\Models\jadwal;
use App\Models\studio;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        // $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('kota', 'kota.id_kota', '=', 'studio.id_kota')
        //     ->get(['jadwal.*', 'film.*', 'studio.*', 'kota.*']);

        $data = kota::join('studio', 'studio.id_kota', '=', 'kota.id_kota')->join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')->join('film', 'film.id_film', '=', 'jadwal.id_film')->get(['kota.*', 'studio.*', 'jadwal.*', 'film.*']);

        return view('movie.index', compact('data'), [
            'title' => 'movie',
            'active' => 'movie'
        ]);
    }

    public function detail($id_film)
    {
        $data = Film::join('jadwal', 'jadwal.id_film', '=', 'film.id_film')
            ->get(['jadwal.*', 'film.*'])
            ->where('id_film', $id_film)->first();

        return view('movie.detail', compact('data'), [
            "title" => "Detail movie",
            "active" => 'Movie',
        ]);
    }


    public function detbooking($id_film)
    {
        $data = studio::join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')
            ->join('film', 'film.id_film', '=', 'jadwal.id_film')
            ->get(['studio.*', 'jadwal.*', 'film.*', 'detail_jenis_studio.*'])
            ->where('id_film', $id_film)->first();


        return view('movie.Detbooking', compact('data'), [
            "title" => "Detail movie",
            "active" => 'Movie',
        ]);
    }
}
