<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index', [
            "title" => "pembayaran",
            "active" => "pembayaran"
        ]);
    } 
}
