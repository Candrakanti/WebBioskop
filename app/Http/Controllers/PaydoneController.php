<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PaydoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index( Request $request)
    {
        if($request->has('search')) {
            $listproducts = Film::where('judul_film', 'LIKE', '%' .$request->search. '%')->get();
        } else {
            $listproducts['listproducts'] = booking::join('jadwal', 'jadwal.id_jadwal', '=', 'booking.id_jadwal')->join('film' , 'film.id_film' ,'=','jadwal.id_film')->join('payment','payment.id_payment' ,'=','booking.id_payment')->join('studio', 'studio.id_studio', '=' ,'jadwal.id_studio')->join('detail_jenis_studio' ,'detail_jenis_studio.id_jenis_studio','=' ,'studio.id_jenis_studio')->join('detail_bioskop' ,'detail_bioskop.id_jadwal', '=' ,'jadwal.id_jadwal' )->join('bioskop' ,'bioskop.id_bioskop' ,'=' ,'detail_bioskop.id_bioskop')->get(['booking.*', 'jadwal.*' ,'film.*' ,'payment.*' ,'studio.*' ,'detail_jenis_studio.*' ,'bioskop.*'])->where('id_customer', '=', Auth::user()->id);        }

        return view('profil.paydone', compact('listproducts'), [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
            ])->with($listproducts);
    }

    public function generate($id_booking)
    {
        $data = Booking::all()->where('id_booking', $id_booking)->first();
   
        $qrcode = QrCode::size(400)->generate('$data->id_booking');
        return view('profil.qrcode',compact('data' , 'qrcode') ,[
            'title' => 'Mycgv',
            'active' => 'Mycgv'
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
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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