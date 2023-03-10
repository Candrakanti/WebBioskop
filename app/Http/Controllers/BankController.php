<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index( Request $request)
    {
        if($request->has('search')) {
            $booking = Booking::where('id_payment', 'LIKE', '%' . encrypt($request->search). '%')->get();
           
            // $booking = Film::where('id_film','LIKE','%' .$request->search.'%' );
        } else {
            $booking = Booking::all();
          
        }
       
        $bo = Booking::all();
        $s = User::all();

            return view('profil.mybank', compact('booking' ,'bo' , 's'), [
                "title" => "mycgv",
                "active" => "mycgv"
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request )
    {
        // $exp  =  Booking::where('tenggat_bayar', '<=', Carbon::now()->format('H:i:s'))->delete();
           $exp =  Booking::join('payment' ,'payment.id_booking' ,'=' ,'booking.id_booking')->where('tenggat_bayar', '<', carbon::now())->update(['status_bayar' => '2']);
        
        //  return $request;
        if( $request->has('search')) {
            $booking = Booking::join('payment' ,'payment.id_payment' ,'=' ,'booking.id_payment')->join('jadwal' ,'jadwal.id_jadwal' ,'=' ,'booking.id_jadwal')->join('film' , 'film.id_film' , '=' ,'jadwal.id_film')->join('users' ,'users.id' ,'=' ,'booking.id_customer')->where('booking.id_payment', 'LIKE', '%' . $request->search. '%')->get(['booking.*' , 'film.*' ,'users.*' ,'payment.*']);
       
      
        } else {
            $booking =Booking::join('payment' ,'payment.id_payment' ,'=' ,'booking.id_payment')->get(['booking.*' ,'payment.*']);
       
        }
        $bo = Booking::all();

            return view('profil.checkout', compact('booking' ,'bo', 'exp' ), [
                "title" => "mycgv",
                "active" => "mycgv"
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Booking $id_payment) 
    {
        $this->validate($request, [
            'id_payment' => 'required',
            'id_booking' => 'required',
            'payment_type' => 'required',
            'status_bayar' => 'required',
            ]);
            DB::table('payment')->where('id_payment', $request->id_payment)->update([
            'id_payment' => $request->id_payment,
            'id_booking' => $request->id_booking,
            'payment_type' => $request->payment_type,
            'status_bayar' => $request->status_bayar,
            ]);

                // DB::table('booking')->where('id_payment', $request->id_payment)->update([
                // 'tenggat_bayar' => $request->tenggat_bayar,
             
                // ]);

            return redirect('/myseenema')->with('success', 'Pembayaran Berhasil , Lihat Pada Menu Selesai!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
