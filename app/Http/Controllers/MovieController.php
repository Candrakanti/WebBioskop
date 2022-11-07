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
use Carbon\Carbon;

class MovieController extends Controller
{
    public function index()
    {

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*']);
        // $cart = Cart::content();
        // dd($cart);
        $data2 = user::all();

        return view('movie.index', compact('data'), [
            'title' => 'movie',
            'active' => 'movie'
        ]);
    }

    public function detail($id_film)
    {
        // $data = Film::join('jadwal', 'jadwal.id_film', '=', 'film.id_film')
        //     ->get(['jadwal.*', 'film.*'])
        //     ->where('id_film', $id_film)->first();

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*'])->where('id_film', $id_film)->first();

        $date = Carbon::now()->format('d-m-Y');

        return view('movie.detail', compact('data'), [
            "title" => "Detail movie",
            "active" => 'Movie',
            "date" => $date
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

    // public function seat(Request $request, $id_film){

    //     $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->join('cart','cart.id_film','=','film.id_film')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*','cart.*'])->where('id_film', $id_film)->first();
    //     return view('movie.booknow', compact('data'),[
    //         "title" => "seat",
    //         "active" => 'Movie',
    //     ]);
       
    // }

    public function booklater(){
        return view('movie.booklater', [
            "title" => "seat",
            "active" => 'Movie',
        ]);
    }
}
