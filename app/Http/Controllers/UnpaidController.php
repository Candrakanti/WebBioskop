<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\film;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UnpaidController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')) {
            $data = film::where('judul_film', 'LIKE', '%' .$request->search. '%')->get();
            // $data = Film::where('id_film','LIKE','%' .$request->search.'%' );
        } else {
            $data = film::where('judul_film', 'LIKE', '%' .$request->search. '%')->get();
        }

        $listproducts['listproducts'] = booking::join('jadwal', 'jadwal.id_jadwal', '=', 'booking.id_jadwal')->join('film' , 'film.id_film' ,'=','jadwal.id_film')->join('payment','payment.id_payment' ,'=','booking.id_payment')->join('studio' , 'studio.id_studio' , '=' , 'jadwal.id_studio')->join('detail_jenis_studio' , 'detail_jenis_studio.id_jenis_studio' , '=' ,'studio.id_jenis_studio')->get(['booking.*', 'jadwal.*' ,'film.*' ,'payment.*' ,'detail_jenis_studio.*'])->where('id_customer', '=', Auth::user()->id);

        $cst= booking::join('payment' , 'payment.id_booking' , '=' ,'booking.id_booking')->where('id_customer', '=', Auth::user()->id)->where('payment.status_bayar' , '=' ,'0')->count();
        return view('profil.unpaid', compact('cst'), [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
        ])->with($listproducts);
    }

    public function exp(Request $request)
    {
            if($request->has('search')) {
            $data = film::where('judul_film', 'LIKE', '%' .$request->search. '%')->get();
            // $data = Film::where('id_film','LIKE','%' .$request->search.'%' );
        } else {
            $data = film::where('judul_film', 'LIKE', '%' .$request->search. '%')->get();
        }

        $listproducts['listproducts'] = booking::join('jadwal', 'jadwal.id_jadwal', '=', 'booking.id_jadwal')->join('film' , 'film.id_film' ,'=','jadwal.id_film')->join('payment','payment.id_payment' ,'=','booking.id_payment')->join('studio' , 'studio.id_studio' , '=' , 'jadwal.id_studio')->join('detail_jenis_studio' , 'detail_jenis_studio.id_jenis_studio' , '=' ,'studio.id_jenis_studio')->get(['booking.*', 'jadwal.*' ,'film.*' ,'payment.*' ,'detail_jenis_studio.*'])->where('id_customer', '=', Auth::user()->id);

        $cst= booking::join('payment' , 'payment.id_booking' , '=' ,'booking.id_booking')->where('id_customer', '=', Auth::user()->id)->where('payment.status_bayar' , '=' ,'2')->count();

        return view('profil.exp', compact('cst'), [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
        ])->with($listproducts);
    }
}
