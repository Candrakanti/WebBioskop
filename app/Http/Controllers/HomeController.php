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
        $end  =  jadwal::where('tgl_tayang_awal', '<=', Carbon::now());
        // $start  =  jadwal::where('tgl_tayang_awal', '<=', Carbon::now());

        $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
        ->get([ 'jadwal.*', 'film.*', 'studio.*']);
    
        return view('home',compact('data' ,'end' ),[
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
