<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use App\Models\Film;
use App\Models\User;
use App\Models\activity_log;
use App\Models\jadwal;
use App\Models\studio;
use App\Models\Booking;
use App\Models\payment;
use App\Services\customer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\CustomerExport;
use Spatie\Backup\BackupManager;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;




class CrudPaymentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }   

    public function index(Request $request)
    {

        if($request->has('search')) {
            $data = User::where('id', 'LIKE', '%' .$request->search. '%')->get();
          
        } else {
            $data = User::all();
        }

        $total_harga = payment::select(DB::raw("CAST(sum(harga) as int) as total_harga"))->GroupBy(DB::raw("Month(created_at)"))->pluck('total_harga');

     
        $bulan = payment::select(DB::raw("MONTHNAME(created_at) as bulan"))->GroupBy(DB::raw("MONTHNAME(created_at)"))->pluck('bulan');
    
        return view('Payment.crud.index', compact('data' , 'total_harga' ,'bulan'), [
            'title' => 'Admin payment',
            'active' => 'Admin payment',
            'pages' => 'Data payment',
        ]);


    }

    public function print(){
        $data =  payment::join('booking' ,'booking.id_payment' , '=' ,'payment.id_payment')->join('users' ,'users.id' ,'=' ,'booking.id_customer')->get(['booking.*' ,'payment.*' , 'users.*']); 
        return view('payment.crud.print', compact('data'), [
            'title' => 'Admin Payment',
            'active' => 'Admin payment',
            'pages' => 'Table Payment'
        ]);
    }
   

    public function cetakPertanggal($tglawal,$tglakhir){
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir :".$tglakhir]);

        $cetak = payment::join('booking' ,'booking.id_payment' , '=' ,'payment.id_payment')->join('users' ,'users.id' ,'=' ,'booking.id_customer')->whereBetween('tanggal_booking',[$tglawal, $tglakhir])->get(['booking.*' ,'payment.*' , 'users.*']); 
          return view('payment.crud.PrintPayment', compact('cetak'), [
            'title' => 'Admin Payment',
            'active' => 'Admin payment',
            'pages' => 'Table Payment'
        ]);

    }

    public function show($id)
    {
        $al = activity_log::where('id', $id)->first();
       
        return view('payment.crud.detail_log', compact('al' ), [
            'title' => 'Admin Film',
            'active' => 'Admin Film',
            'pages' => 'Detail Film',
        ]);
    }

   

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

 
    public function customer(Request $request)
    {

        $customerTicketCount = Booking::getCustomerTicketCount();
        $data = Booking::join('users', 'users.id', '=', 'booking.id_customer')->join('payment', 'payment.id_booking', '=', 'booking.id_booking')->groupBy('id')->paginate(2);

        
        if($request->has('search')) {
            $data = User::where('name', 'LIKE', '%' .$request->search. '%')->paginate(2);
          
        } else {
            $data = User::paginate(2);
        }
        return view('payment.crud.datauser',  compact('data', 'customerTicketCount'), [

            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }

    public function detail($id_customer)
    {
        
        $data = Booking::where('id_customer', $id_customer)->first();

        // $result = DB::table('booking')
        // ->select(DB::raw( 'CALL buy'))->get();

        $customerTicketCount = Booking::getCustomerTicketCount();
        return view('payment.crud.detail', compact( 'data', 'customerTicketCount' ), [
            'title' => 'Admin Payment',
            'active' => 'Admin Payment',
            'pages' => 'Detail',
        ]);
    }

    // public function costumerexport()
    // {
    //     return Excel::download(new CustomerExport, 'users.xlsx');
    // }
    
    public function costumerexport(customer $export, Request $request, Excel $excel)
    {
        return $export->exportToExcel($request, $excel);
    }

    function get_customer_data()
    {
        $customer_data = payment::join('booking' ,'booking.id_booking','=','payment.id_booking')->join('users','users.id','=','booking.id_customer')->get(['payment.*','booking.*','users.*']);


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

    
    public function logging()
    {
        //  $log= activity_log::all(); 
        $log = User::join('activity_log', 'activity_log.causer_id', '=', 'users.id')->get(['activity_log.*' ,'users.*']);
        
        return view('payment.crud.log', compact( 'log'  ), [
            'title' => 'Admin Payment',
            'active' => 'Admin Payment',
            'pages' => 'Activity Log',
        ]);
    }


  
}   

