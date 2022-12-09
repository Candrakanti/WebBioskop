<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use Illuminate\Support\Facades\Auth;

class UnpaidController extends Controller
{
    public function index()
    {
        $listproducts['listproducts'] = booking::join('jadwal', 'jadwal.id_jadwal', '=', 'booking.id_jadwal')->join('film' , 'film.id_film' ,'=','jadwal.id_film')->join('payment','payment.id_payment' ,'=','booking.id_payment')->get(['booking.*', 'jadwal.*' ,'film.*' ,'payment.*'])->where('id_customer', '=', Auth::user()->id);
        return view('profil.unpaid', [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
        ])->with($listproducts);
    }
}
