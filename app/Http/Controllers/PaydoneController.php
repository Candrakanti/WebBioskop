<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PaydoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $listproducts['listproducts'] = Booking::join('film', 'film.id_film', '=', 'booking.id_film')->get(['booking.', 'film.'])->where('user_id', '=', Auth::user()->id);
        // return view('profil.paydone', [
        //     'title' => 'Mycgv',
        //     'active' => 'Mycgv'
        // ])->with($listproducts);


        $listproducts['listproducts'] = booking::join('jadwal', 'jadwal.id_jadwal', '=', 'booking.id_jadwal')->join('film' , 'film.id_film' ,'=','jadwal.id_film')->join('payment','payment.id_payment' ,'=','booking.id_payment')->join('studio', 'studio.id_studio', '=' ,'jadwal.id_studio')->join('detail_jenis_studio' ,'detail_jenis_studio.id_jenis_studio','=' ,'studio.id_jenis_studio')->get(['booking.*', 'jadwal.*' ,'film.*' ,'payment.*' ,'studio.*' ,'detail_jenis_studio.*'])->where('id_customer', '=', Auth::user()->id);
        return view('profil.paydone', [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
        ])->with($listproducts);
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