<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;

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

    
        $listproducts['listproducts'] = cart::join('film', 'film.id_film', '=', 'cart.id_film')->get(['cart.*', 'film.*'])->where('user_id', '=', Auth::user()->id);
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