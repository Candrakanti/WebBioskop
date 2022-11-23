<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\jadwal;
use App\Models\Film;
use App\Models\studio;

use Illuminate\Support\Facades\DB;


class CrudPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $data = studio::all();

        return view('payment.crud.index', compact('data'), [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }

    public function customer()
    {

        $data = Booking::join('users' ,'users.id' ,'=','booking.id_customer')->join('payment','payment.id_customer' ,'=','booking.id_customer')->get(['booking.*','payment.*' ,'users.*']);
    
        return view('payment.crud.LayoutPayment',  compact('data'), [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }
}
