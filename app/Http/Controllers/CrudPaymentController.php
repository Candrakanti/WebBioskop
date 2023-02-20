<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\jadwal;
use App\Models\Film;
use App\Models\payment;
use App\Models\User;
use App\Models\studio;
use DB;
use PDF;

// use Illuminate\Support\Facades\DB;


class CrudPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        // $data = User::join('booking' ,'booking.id_customer' ,'=','users.id')->get(['booking.*','users.*']);

        // return view('Payment.crud.index', compact('data'), [
        //     'title' => 'Admin Payment',
        //     'pages' => 'Table Payment'
        // ]);


        if($request->has('search')) {
            $data = User::where('id', 'LIKE', '%' .$request->search. '%')->get();
          
        } else {
            $data = User::all();
        }


        return view('Payment.crud.index', compact('data'), [
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
                'created_at' => $request->creted_at,
                'image' => $request->image

            ]);

        return redirect('/CrudPayment')->with('success', 'Data Berhasil Diubah!');
    }

    public function customer()
    {
        $data = Booking::join('users' ,'users.id' ,'=','booking.id_customer')->join('payment','payment.id_booking' ,'=','booking.id_booking')->get(['booking.*','payment.*' ,'users.*']);
        // $data = DB::table('booking')->join('users' ,'users.id' ,'=','booking.id_customer')->join('payment','payment.id_booking' ,'=','booking.id_booking')->select('CALL JumlahPembeliann()')->get(['booking.*','payment.*' ,'users.*']);

        // $post = DB::select("CALL JumlahPembelian");
        // $post = DB::select("CALL JumlahPembeliann ($id)");
        
        $post = DB::select('CALL JumlahPembeliann ("jumlah ")');
     
        return view('payment.crud.datauser',  compact('data' , 'post' ), [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }

    // public function print(){
    //     return view('payment.crud.print', [
    //         'title' => 'Admin Payment',
    //         'pages' => 'Table Payment'
    //     ]);
    // }

    // public function cetakPertanggal($tglawal,$tglakhir){
    //     // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir :".$tglakhir]);

    //     $cetak = Booking::with('id_customer')->whereBetween('tanggal_booking',[$tglawal, $tglakhir]); 
    //       return view('payment.crud.PrintPayment', compact('cetak'), [
    //         'title' => 'Admin Payment',
    //         'pages' => 'Table Payment'
    //     ]);

    // }

    public function Export()
    {
        $customer_data = $this->get_customer_data();
        return view('payment.crud.dynamic_pdf' , [
            'title' => 'Laporan Keuangan',
            'pages' => 'Laporan Keuangan'
        ])->with('customer_data', $customer_data);
    }

    function get_customer_data()
    {
        $customer_data = payment::join('booking' ,'booking.id_booking','=','payment.id_booking')->join('users','users.id','=','booking.id_customer')->get(['payment.*','booking.*','users.*']);
    //  $customer_data = DB::table('payment')
    //      ->limit(10)
    //      ->get();
     return $customer_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '

         <h1 align="center">SeeNema</h1>
         <h3 align="center">Laporan Keuangan </h3>
     <hr class="border border-dark border-2 opacity-50 d-flex justify-content-center" width="100%" style="background-color: black; margin-bottom: 5%;">
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">No</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Nama</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Id Payment</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Id Booking</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Jenis Payment</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Jumlah Bayar</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Status</th>
    
   </tr>
     ';  
     foreach($customer_data as $key => $customer)
     {
      $output .= '
      <tr>
      <td style="border: 1px solid; padding:12px;">'.$key++.'</td>
      <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->id_payment.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->id_booking.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->payment_type.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->harga.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->status_bayar.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}   
