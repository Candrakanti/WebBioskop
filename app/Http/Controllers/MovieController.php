<?php

namespace App\Http\Controllers;

use App\Models\cart1;
use App\Models\Film;
use App\Models\kota;
use App\Models\jadwal;
use App\Models\studio;
use App\Models\user;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {

        // $data = kota::join('studio', 'studio.id_kota', '=', 'kota.id_kota')->join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')->join('film', 'film.id_film', '=', 'jadwal.id_film')->get(['kota.*', 'studio.*', 'jadwal.*', 'film.*']);

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*']);
        // $cart = Cart::content();
        // dd($cart);
        $data2 = user::all();

        // $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('kota', 'kota.id_kota', '=', 'jadwal.id_kota')
        //     ->get(['jadwal.*', 'film.*', 'studio.*', 'kota.*']);
        // $data2 =  kota::join('studio', 'studio.id_kota', '=', 'kota.id_kota')->join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')->join('film', 'film.id_film', '=', 'jadwal.id_film')->groupBy('film.id_film')->get(['kota.*', 'studio.*', 'jadwal.*', 'film.*']);

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

    public function detkota($id_kota)
    {
        $data = studio::join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')
            ->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('kota', 'kota.id_kota', '=', 'studio.id_kota')
            ->get(['studio.*', 'jadwal.*', 'film.*', 'detail_jenis_studio.*', 'kota.*'])
            ->where('id_kota', $id_kota)->first();
        return view('movie.DetKota', compact('data'), [
            "title" => "Detail movie",
            "active" => 'Movie',
        ]);
    }
}
