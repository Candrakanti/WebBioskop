<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\booking;

class CgvController extends Controller
{
    public function index()
    {
        $cst= booking::join('payment' , 'payment.id_booking' , '=' ,'booking.id_booking')->where('id_customer', '=', Auth::user()->id)->where('payment.status_bayar' , '=' ,'0')->count();
        return view('profil.index', compact('cst') , [
            "title" => "mycgv",
            "active" => "mycgv"
        ]);
    }
}
