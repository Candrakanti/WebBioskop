<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\jadwal;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->get(['jadwal.*', 'film.*']);

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
            "active" =>'Movie',
            // 'data'=> $data
        ]);

        // $data = Film::where('id_film', $id_film)->first();
        // return view('movie.detail', compact('data'));
  
    //     $data = Kepegawaian::join('golongan', 'golongan.kode_golongan', '=', 'karyawan.golongan_id')
    //     ->get(['karyawan.*', 'golongan.*'])
    //     ->where('nip', $nip)->first();
        
    //     return view('detailpegawai.detail',  compact('data'), [
    //     'detail' => '$data',
    //     'title' => 'Detail Pegawai'
    // ]);
    }
}
