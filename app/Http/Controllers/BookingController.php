<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingLater;
use App\Models\payment;
use App\Models\bank;
use App\Models\kota;
use App\Models\jadwal;
// use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\cart;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index(Request $request, $id_jadwal , $jam_tayang)
    {
        //         // Set your Merchant Server Key
        //  \Midtrans\Config::$serverKey = 'SB-Mid-server-HifKik2bJqkbyshlP0mbufdu';
        //  // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        //  \Midtrans\Config::$isProduction = false;
        //  // Set sanitization on (default)
        //  \Midtrans\Config::$isSanitized = true;
        //  // Set 3DS transaction for credit card to true
        //  \Midtrans\Config::$is3ds = true;
         
        //  $params = array(
        //      'transaction_details' => array(
        //          'order_id' => rand(),
        //          'gross_amount' => 10000,
        //      ),
        //      'customer_details' => array(
        //          'first_name' => Auth::user()->name,
        //          'email' => Auth::user()->email,
        //          'phone' => Auth::user()->phone,
        //      ),
             
        //      "item_details" => array(
        //         [
        //           'id' => 'a1',
        //           'price' => '6000',
        //           'quantity' => 1,
        //           'name' => 'aku bukan harimau',
        //         ]
        //         ),
                
        //  );
         
        //  $snapToken = \Midtrans\Snap::getSnapToken($params);

        // $data = jadwal::join('film' ,'film.id_film','=','jadwal.id_film')->join('studio','studio.id_studio','=','jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->get(['film.*','studio.*','jadwal.*','detail_jenis_studio.*' ])->where('id_jadwal',$id_jadwal)->first();

        $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')->join('detail_bioskop','detail_bioskop.id_jadwal' ,'=' ,'jadwal.id_jadwal')->join('bioskop','bioskop.id_bioskop' ,'=' ,'detail_bioskop.id_bioskop')->join('detail_jam' , 'detail_jam.id_db' ,'=' ,'detail_bioskop.id_db')->get([ 'jadwal.*', 'film.*', 'studio.*', 'detail_jenis_studio.*' ,'detail_bioskop.*' , 'detail_jam.*' ,'bioskop.*' ])->where( 'jam_tayang' ,$jam_tayang)->first();

            $data2 = jadwal::join('booking', 'booking.id_jadwal', '=','jadwal.id_jadwal')->join('payment' ,'payment.id_booking' , '=' ,'booking.id_booking')->get(['jadwal.*' ,'booking.*' ,'payment.*']);

        $generateBK =  IdGenerator::generate(['table' => 'booking', 'field' => 'id_booking', 'length' => 10, 'prefix' => 'BK']);

    
        $generatePY = IdGenerator::generate(['table' => 'payment', 'field' => 'id_payment', 'length' => 12, 'prefix' =>'BK'.Auth::user()->id]);


        // $exp  =   booking::where('tenggat_bayar', '<',Carbon::now())->delete();
        $exp =  Booking::join('payment' ,'payment.id_booking' ,'=' ,'booking.id_booking')->where('tenggat_bayar', '<', carbon::now())->update(['status_bayar' => '2']);
    
        $book = payment::join('booking' ,'booking.id_payment' ,'=' ,'payment.id_payment')->get(['payment.*' , 'booking.*']);

        return view('movie.seat', compact('data','data2' ,'generateBK' , 'generatePY'  , 'exp' ,'book'), [
             // 'snapToken' =>$snapToken,
            'title' => 'Seat',
            'pages' => 'Table Studio'
        ]);
    }

    public function mindtrans(Request $request)
    {
         // Set your Merchant Server Key
         \Midtrans\Config::$serverKey = env('MINDTRANS_SERVER_KEY');
         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
         \Midtrans\Config::$isProduction = false;
         // Set sanitization on (default)
         \Midtrans\Config::$isSanitized = true;
         // Set 3DS transaction for credit card to true
         \Midtrans\Config::$is3ds = true;
         
         $params = array(
             'transaction_details' => array(
                 'order_id' => rand(),
                //  'order_id' => $request->get('id_booking'),
                 'gross_amount' =>$request->get('harga'),
             ),
             'customer_details' => array(
                 'first_name' => Auth::user()->name,
                 'email' => Auth::user()->email,
                 'phone' => Auth::user()->phone,
             ),
             
             "item_details" => array(
                [
                  'id' => $request->get('id_film'),
                  'price' =>$request->get('harga'),
                  'quantity' => $request->get('jumlah_kursi'),
                  'name' => $request->get('judul_film'),
                ]
                ),
                
         );
         
         $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('movie.mindtrans', [
            'snapToken' =>$snapToken,
            "title" => "mycgv",
            "active" => "mycgv"
        ]);

    }

    public function mindtrans_post(Request $request)
    {
        // return $request;
            $json = json_decode($request->get('json'));
            $booking = new booking();
            $booking->id_booking = $json->order_id;
            $booking->id_customer =  $request->get('id_customer');
            $booking->id_payment =   $json->transaction_id;
            $booking->id_jadwal = $request->get('id_jadwal');
            $booking->tanggal_booking =  $json->transaction_time;
            $booking->kursi = $request->get('kursi');
            $booking->jumlah_kursi = $request->get('jumlah_kursi');
            $booking->harga =  $request->get('harga');
            $booking->created_at = now();
            $booking->updated_at = now();
            $booking->save();

            $payment = new payment;
            $payment->id_payment = $json->transaction_id;
            $payment->id_booking = $json->order_id;
            $payment->payment_code = isset($json->payment_code) ? $json->payment_code : null;
            $payment->payment_type =$json->payment_type;
            $payment->harga = $request->get('harga');
            $payment->status_bayar = $json->transaction_status;
            $payment->created_at = now();
            $payment->updated_at = now();
            $payment->save();

            return redirect('/movie')->with('success', 'success adding to cart !');
            
            // return $booking->save() ? redirect('/movie')->with('success', 'success adding to cart !') : redirect('/movie')->with('alert-failed', 'error');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $exp  =  Booking::where('tenggat_bayar', '<=', Carbon::now())->delete();
        return view('profil.checkout', compact('exp'), [
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

 
   
//    return $request;


       Booking::insert([
            'id_booking' =>   $request->id_booking,
            'id_payment' => $request->id_payment,
            'id_customer' => Auth::user()->id,
            'id_jadwal' => $id_jadwal,
            'kursi' =>$request->kursi,
            'jumlah_kursi' =>  $request->jumlah_kursi,
            'tanggal_booking' => now(),
            'jam_booking' =>$request->jam_booking,
            'tenggat_bayar' =>now()->addMinutes(30),
            'harga' => $request->harga,
            'qr_tiket'=> $request->harga,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        payment::insert([
            'id_payment' => $request->id_payment,
            'id_booking' => $request->id_booking ,
            'payment_type' => $request->payment_type,
            'harga' => $request->harga,
            'status_bayar' => $request->status_bayar,
            'created_at' => now(),
            'updated_at' => now(),
            // 'bukti_bayar' => $request->file('bukti_bayar')->store('booking-images')
        ]);


  

        return redirect('/myseenema')->with('success', 'Suksess ! Selesaikan Pembayaran Lihat Pada Menu Belum Bayar!');
        // return redirect()->route('payment.now',$id_jadwal)->with('success', 'success adding to cart !');
    }

    public function Later(Request $request, $id_jadwal){
     
    
        BookingLater::insert([
       
            'id_customer' => Auth::user()->id,
            'id_jadwal' => $id_jadwal,
            'kursi' =>$request->kursi,
            'jumlah_kursi' =>  $request->jumlah_kursi,
            'tanggal_booking' => $request->tanggal_booking,
            'harga' => $request->harga,
            'tenggat_bayar' =>now()->addMinutes(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        payment::insert([
            'id_payment' => IdGenerator::generate(['table' => 'payment', 'length' => 7, 'prefix' =>'INV-']),
            // 'id_booking' => $request->id_booking,
            // 'id_bank' => $request->id_bank,
          
            'harga' => $request->harga,
            'status' => $request->status,
            'image' =>   $request->file('image')->store('booking-images')
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
