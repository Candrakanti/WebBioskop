<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

use App\Models\detail_booking;
use App\Models\kota;
use App\Models\jadwal;
// use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\cart;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id_film)
    {
        // $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*'])->where('id_film', $id_film)->first();

        $data = jadwal::join('film' ,'film.id_film','=','jadwal.id_film')->join('studio','studio.id_studio','=','jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['film.*','studio.*','jadwal.*','detail_jenis_studio.*'])->where('id_film',$id_film)->first();
     
        return view('movie.seat', compact('data' ), [
            'title' => 'Seat',
            'pages' => 'Table Studio'
        ]);
    }


    public function count()
    {
        $count = \DB::table('cart')->where(Auth::user()->id)->count();
        return view('partials.navbarNew', compact('count'), [
            "title" => "mycgv",
            "active" => "mycgv"
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_jadwal)
    {
        // echo request()->ip();
        // die();

        // dd($request);
        // cart::insert([
        //     'id_film' => $id_film,
        //     'user_id' => Auth::user()->id,
        //     'harga' => $request->harga,
        //     'kursi' =>   $request->kursi,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
       Booking::insert([
        'id_booking' => Auth::user()->id,
            'id_customer' => Auth::user()->id,
            'id_jadwal' => $id_jadwal,
            'tanggal_booking' => now(),
            'harga' => $request->harga,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/movie')->with('success', 'success adding to cart !');
    }

    public function addToCart(Request $request)
    {
        $product = Film::findOrFail($request->input(key: 'id_film'));
        Cart::add(
            $product->id_film,
            $product->judul_film,
            $request->input(key: 'quantity'),
            $product->harga / 100,
            $product->image
        );
        return redirect('/movie')->with('success', 'success adding to cart !');

        // \Cart::add([
        //     'id' => $request->id,
        //     'id_film' => $request->name,
        // ]);
        // session()->flash('success', 'Product is Added to Cart Successfully !');

        // return redirect()->route('cart.list');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id_film)
    {
       
    }

    public function detail($id_film){
       $data = jadwal::join('film' ,'film.id_film','=','jadwal.id_film')->join('studio','studio.id_studio','=','jadwal.id_studio')->get(['jadwal.*','film.*','studio.*',])->where('id_film', $id_film)->first();
        return view('movie.seat', compact('data'), [
            'title' => 'Seat',
            'pages' => 'Table Studio'
        ]);
    }

    public function form()
    {
        return "hi";
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
