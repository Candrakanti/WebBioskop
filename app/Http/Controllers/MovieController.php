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

      $exp  =  jadwal::where('tgl_tayang_akhir', '<=', Carbon::now())->delete();

        return view('movie.index', compact('data' , 'exp'), [
            'title' => 'movie',
            'active' => 'movie'
        ]);
    }

    public function detail($id_jadwal)
    {
       

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*'])->where('id_jadwal', $id_jadwal)->first();
        $date = Carbon::now()->format('d-m-Y');

        return view('movie.detail', compact('data'), [
            "title" => "Detail movie",
            "active" => 'Movie',
            "date" => $date
        ]);
    }

    public function gateway($id_jadwal){
        $data = jadwal::join('film' ,'film.id_film','=','jadwal.id_film')->join('studio','studio.id_studio','=','jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['film.*','studio.*','jadwal.*','detail_jenis_studio.*'])->where('id_jadwal',$id_jadwal)->first();
        return view('movie.gateway',compact('data') ,[
            "title" => "Payment",
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

    public function booklater(Request $request, $id_film){

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')
        ->join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
        ->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*'])->where('id_film', $id_film)->first();

        return view('movie.booklater', compact('data'), [ 
            "title" => "seat",
            "active" => 'Movie',
        ]);
    }

    public function booknow(Request $request, $id_jadwal){

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*'])->where('id_jadwal', $id_jadwal)->first();
        return view('movie.booknow',  compact('data'), [
            "title" => "seat",
            "active" => 'Movie',
        ]);
    }
}
