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
use App\Models\detail_kota;
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

   
    public function index(Request $request, $id_jadwal)
    {
                // Set your Merchant Server Key
         \Midtrans\Config::$serverKey = 'SB-Mid-server-HifKik2bJqkbyshlP0mbufdu';
         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
         \Midtrans\Config::$isProduction = false;
         // Set sanitization on (default)
         \Midtrans\Config::$isSanitized = true;
         // Set 3DS transaction for credit card to true
         \Midtrans\Config::$is3ds = true;
         
         $params = array(
             'transaction_details' => array(
                 'order_id' => rand(),
                 'gross_amount' => 10000,
             ),
             'customer_details' => array(
                 'first_name' => 'budi',
                 'last_name' => 'pratama',
                 'email' => 'budi.pra@example.com',
                 'phone' => '08111222333',
             ),
         );
         
         $snapToken = \Midtrans\Snap::getSnapToken($params);

        $data = jadwal::join('film' ,'film.id_film','=','jadwal.id_film')->join('studio','studio.id_studio','=','jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['film.*','studio.*','jadwal.*','detail_jenis_studio.*'])->where('id_jadwal',$id_jadwal)->first();

        $data2 = detail_booking::all();
     
        return view('movie.seat', compact('data','data2' ), [
            'snapToken' =>$snapToken,
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

        detail_booking::insert([
            'kursi' => $request->kursi,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

       Booking::insert([
       
            'id_customer' => Auth::user()->id,
            'id_jadwal' => $id_jadwal,
            'kursi' => $request->kursi,
            'jumlah_kursi' => $request->jumlah_kursi,
            'tanggal_booking' => now(),
            'harga' => $request->harga,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/movie')->with('success', 'success adding to cart !');
        // return redirect()->route('payment.now',$id_jadwal)->with('success', 'success adding to cart !');
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
