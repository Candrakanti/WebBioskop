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
        return view('Payment.crud.index', [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }

    public function customer()
    {

        $data = Booking::join('users' ,'users.id' ,'=','booking.id_booking')->join('payment','payment.id_booking' ,'=','booking.id_booking')->get(['booking.*','payment.*' ,'users.*']);
    
        return view('payment.crud.LayoutPayment',  compact('data'), [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }

    public function print(){
        return view('payment.crud.print', [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
    }

    public function cetakPertanggal($tglawal,$tglakhir){
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir :".$tglakhir]);

        $cetak = Booking::with('id_booking')->whereBetween('tanggal_booking',[$tglawal, $tglakhir]); 
          return view('payment.crud.PrintPayment', compact('cetak'), [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);

    }
}
