<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\jadwal;
use App\Models\kota;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
        // ->join('bioskop', 'bioskop.id_bioskop', '=', 'jadwal.id_bioskop')
        // ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
        // ->get(['bioskop.*', 'jadwal.*', 'film.*', 'studio.*']);

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')
        ->join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
        ->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*']);
    
        return view('home',compact('data'),[
            'title' => 'Home',
            'active' => 'Home'
        ]);
    }

    public function playing(){
        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')
        ->join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
        ->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*']);

        $play =  jadwal::all();
        return view('movie.playing',compact('data' , 'play'),[
            'title' => 'Home',
            'active' => 'Home'
        ]);
    }

}
