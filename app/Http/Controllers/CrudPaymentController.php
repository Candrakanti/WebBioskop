<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\jadwal;
use App\Models\Film;
use App\Models\payment;
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

    // public function edit(studio $studio, $id_studio)
    // {
    //     $jenis_studio = jenis_studio::all();
    //     $std = DB::table('studio')->where('id_studio', $id_studio)->first();
    //     return view(
    //         'studio.crud.edit',
    //         compact('jenis_studio'),
    //         [
    //             'studio' => $std,
    //             'title' => 'Edit Studio',
    //             'pages' => 'Edit Studio'
    //         ]
    //     );
    // }

    // public function edit($nip)
    // { 
    //     $gl = golongan::all();
    //     $data = DB::table('karyawan')->where('nip', $nip)->first();
    //     return view('kepegawaian.edit', compact('gl'),
    //     [
    //         'data'=> $data
    //     ]
    // );
     
    // }

    public function edit($id_payment)
    {
        // $bk = Booking::all();
        $data = DB::table('payment')->where('id_payment', $id_payment)->first();
        return view('payment.crud.edit', compact('data'), [
            'payment' => $data,
            'title' => 'Konfirmasi Pembayaran',
            'pages' => 'Konfirmasi Pembayaran'
        ]);
    }

    public function update(Request $request,  $id_payment)
    {
        $data = payment::where('id_payment', $request->id_payment)
            ->update([
                'id_payment' => $request->id_payment,
                'id_booking' => $request->id_booking,
                'nama_bank' => $request->nama_bank,
                'harga' => $request->harga,
                'status' => $request->status,
                'image' => $request->image

            ]);

        return redirect('/CrudPayment')->with('success', 'Data Berhasil Diubah!');
    }

    public function customer()
    {

        $data = Booking::join('users' ,'users.id' ,'=','booking.id_customer')->join('payment','payment.id_booking' ,'=','booking.id_booking')->get(['booking.*','payment.*' ,'users.*']);
    
        return view('payment.crud.LayoutPayment',  compact('data'), [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }
}
