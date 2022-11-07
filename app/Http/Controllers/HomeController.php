<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\jadwal;
use App\Models\kota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
        // ->get(['jadwal.*', 'film.*']);

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')
        ->join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
        ->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*']);

        return view('home', compact('data'), [
            'title' => 'Home',
            'active' => 'Home'
        ]);
    }

    // public function detail($tgl_tayang_awal)
    // { 
    //     $data = Film::join('jadwal', 'jadwal.id_film', '=', 'film.id_film')
    //     ->get(['jadwal.*', 'film.*'])
    //     ->where('tgl_tayang_awal', $tgl_tayang_awal)->first();

    //     return view('home', compact('data'), [
    //         "title" => "Home Detail Film",
    //         "active" =>'Home Film',
    //     ]);
    // }
}
