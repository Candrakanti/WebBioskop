<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\Film;
use Illuminate\Support\Facades\Auth;

class UnpaidController extends Controller
{
    public function index( Request $request)
    {
        if($request->has('search')) {
            $data = booking::where('id_payment', 'LIKE', '%' .$request->search. '%')->get();
        } else {
            booking::join('jadwal', 'jadwal.id_jadwal', '=', 'booking.id_jadwal')->join('film' , 'film.id_film' ,'=','jadwal.id_film')->join('payment','payment.id_payment' ,'=','booking.id_payment')->get(['booking.*', 'jadwal.*' ,'film.*' ,'payment.*']);
        }

        $listproducts['listproducts'] = booking::join('jadwal', 'jadwal.id_jadwal', '=', 'booking.id_jadwal')->join('film' , 'film.id_film' ,'=','jadwal.id_film')->join('payment','payment.id_payment' ,'=','booking.id_payment')->get(['booking.*', 'jadwal.*' ,'film.*' ,'payment.*'])->where('id_customer', '=', Auth::user()->id);
        return view('profil.unpaid', compact('data'), [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
            ])->with($listproducts);
    }

    public function exp( Request $request)
    {
        if($request->has('search')) {
            $listproducts = Film::where('judul_film', 'LIKE', '%' .$request->search. '%')->get();
        } else {
            $listproducts['listproducts'] = booking::join('jadwal', 'jadwal.id_jadwal', '=', 'booking.id_jadwal')->join('film' , 'film.id_film' ,'=','jadwal.id_film')->join('payment','payment.id_payment' ,'=','booking.id_payment')->get(['booking.*', 'jadwal.*' ,'film.*' ,'payment.*'])->where('id_customer', '=', Auth::user()->id);
        }

        return view('profil.exp', compact('listproducts'), [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
            ])->with($listproducts);
    }
}
