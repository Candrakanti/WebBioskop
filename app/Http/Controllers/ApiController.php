<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\payment;

class ApiController extends Controller
{
    public function payment_handler(Request $request){
        $json = json_decode($request->getContent());
        $signature_key = hash('sha512' , $json->order_id . $json->status_code . $json->gross_amount . env('MINDTRANS_SERVER_KEY'));
        
        if($signature_key != $json->signature_key) {
            return abort(404);
         } else{
           //  STATUS BERHASIL JIKA SIGNATURE KEY SAMA
         $payment = payment::where('id_booking', $json->order_id)->first();
         return $payment->update(['status_bayar' => $json->transaction_status]); 
         }
         
    }
}
