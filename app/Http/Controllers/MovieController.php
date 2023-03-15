<?php

namespace App\Http\Controllers;

use App\Models\_detail_jam;
use App\Models\_detail_bioskop;
use App\Models\Bioskop;
use App\Models\booking;
use App\Models\kota;
use App\Models\jadwal;
use App\Models\studio;
use App\Models\Film;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

//inheritance merupakan pewarisan
//setiap class induk(superclass) akan mewarisankan property dan method pada class turunannya(subclass)
//memiliki keyword extends
class MovieController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {

            // $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->where('judul_film', 'LIKE', '%' .$request->search. '%')->get([ 'jadwal.*', 'film.*', 'studio.*']);

            $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->where('judul_film', 'LIKE', '%' .$request->search. '%')->get([ 'jadwal.*', 'film.*', 'studio.*']);
        } else {

            $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
            ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
            ->get([ 'jadwal.*', 'film.*', 'studio.*']);

      
        }
            $exp  =  jadwal::where('tgl_tayang_akhir', '<', Carbon::now())->delete();

        return view('movie.index', compact('data' , 'exp' ), [
            'title' => 'movie',
            'active' => 'movie'
        ]);
    }

    public function upcoming()
    {
        $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->get([ 'jadwal.*', 'film.*', 'studio.*']);
        // $cart = Cart::content();
        // dd($cart);
        $exp  =  jadwal::where('tgl_tayang_akhir', '<=', Carbon::now())->delete();
     
        return view('movie.soon', compact('data' , 'exp' ), [
            'title' => 'movie',
            'active' => 'movie'
        ]);
    }

    public function detail($id_jadwal  )
    {


        $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->join('detail_bioskop','detail_bioskop.id_jadwal' ,'=' ,'jadwal.id_jadwal')->join('bioskop','bioskop.id_bioskop' ,'=' ,'detail_bioskop.id_bioskop')->join('detail_jam' , 'detail_jam.id_db' ,'=' ,'detail_bioskop.id_db')->get([ 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*' ,'detail_bioskop.*' , 'detail_jam.*' ,'bioskop.*'])->where('id_jadwal', $id_jadwal)->first();

     $mall = Bioskop::join('detail_bioskop' ,'detail_bioskop.id_bioskop' ,'=' ,'bioskop.id_bioskop')->join('detail_jam' ,'detail_jam.id_db' , '=' ,'detail_bioskop.id_db')->join('jadwal' ,'jadwal.id_jadwal' ,'=' ,'detail_bioskop.id_jadwal')->join('studio' , 'studio.id_studio' , '=' , 'jadwal.id_studio')->join('detail_jenis_studio' ,'detail_jenis_studio.id_jenis_studio' ,'=' ,'studio.id_jenis_studio')->get(['jadwal.*' ,'bioskop.*' ,'detail_bioskop.*' ,'detail_jam.*' ,'detail_jenis_studio.*']) ;

     $c = Bioskop::join('detail_bioskop' ,'detail_bioskop.id_bioskop' ,'=' ,'bioskop.id_bioskop')->join('detail_jam' ,'detail_jam.id_db' , '=' ,'detail_bioskop.id_db')->join('jadwal' ,'jadwal.id_jadwal' ,'=' ,'detail_bioskop.id_jadwal')->join('studio' , 'studio.id_studio' , '=' , 'jadwal.id_studio')->join('detail_jenis_studio' ,'detail_jenis_studio.id_jenis_studio' ,'=' ,'studio.id_jenis_studio')->get(['jadwal.*' ,'bioskop.*' ,'detail_bioskop.*' ,'detail_jam.*' ,'detail_jenis_studio.*']) ;

    //  $nb =   DB::select('SELECT date_movie() as s');


    // $result = DB::select('SELECT date_movie (tgl_tayang_akhir,tgl_tayang_awal) as result from jadwal')[2]->result;

    $result = DB::table('jadwal')
    ->select(DB::raw('date_movie (tgl_tayang_awal) as result'))
    ->where('id_jadwal', $id_jadwal)->get();

    // CONVERT ARRAY KE STRING  FUNGSI STRVAL CONVERT DARI INT KE STRING.
    $Cs = json_decode($result)[0]->result;
    $string = strval($Cs);

        $time = _detail_jam::where('jam_tayang', '<=', Carbon::now()->timezone('asia/jakarta')->format('h:i'))->get();
        return view('movie.detail', compact('data' ,'time' ,'mall' ,'c'  , 'result' , 'Cs' , 'string'), [

            "title" => "Detail movie",
            "active" => 'Movie',
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

    public function booklater(Request $request, $id_jadwal){

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')
        ->join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
        ->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*'])->where('id_jadwal', $id_jadwal)->first();

    
        return view('movie.booklater', compact('data' ), [ 
            "title" => "seat",
            "active" => 'Movie',
        ]);
    }

    public function booknow(Request $request, $id_jadwal){

        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*'])->where('id_jadwal', $id_jadwal)->first();
        $cek = booking::all();
        return view('movie.booknow',  compact('data' ,'cek'), [
            "title" => "seat",
            "active" => 'Movie',
        ]);
    }

    public function bookLaterSeat(Request $request, $id_jadwal){

        $data = jadwal::join('film' ,'film.id_film','=','jadwal.id_film')->join('studio','studio.id_studio','=','jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['film.*','studio.*','jadwal.*','detail_jenis_studio.*' ])->where('id_jadwal',$id_jadwal)->first();

        $data2 = jadwal::join('booking_later', 'booking_later.id_jadwal', '=','jadwal.id_jadwal')->get(['jadwal.*' ,'booking_later.*']);

        return view('movie.SeatLater',  compact('data' , 'data2'), [
            "title" => "seat",
            "active" => 'Movie',
        ]);
    }
}
