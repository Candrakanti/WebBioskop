<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Film;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('movie.seat', [
            'title' => 'Seat',
            'pages' => 'Table Studio'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('profil.checkout', [
            "title" => "mycgv",
            "active" => "mycgv"
        ]);


        // $Film = Film::findOrFail($request->input('id_film'));
        // Cart::add($Film->id_film, $Film->judul_film);
        // return redirect('/booking')->with('success', 'Berhasil Data Telah Ditambahkan!');
        // return redirect()->route(route: 'booking.cart')->with('success', 'Berhasil Data Telah Ditambahkan!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_film)
    {
        $product = Film::findOrFail($id_film);
        $cart = session()->get('film', []);

        if (isset($cart[$id_film])) {
            $cart[$id_film]['quantity']++;
        } else {

            $cart[$id_film] = [

                "judul_film" => $product->judul_film,
                // "quantity" => 1,
                "jam_tayang" => $product->jam_tayang,
            ];
        }

        session()->put('film', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
