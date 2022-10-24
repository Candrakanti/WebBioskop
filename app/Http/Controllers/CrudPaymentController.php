<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;
use App\Models\Film;
use App\Models\studio;
use App\Models\payment;
use Illuminate\Support\Facades\DB;


class CrudPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $data = studio::all();

        return view('payment.crud.LayoutPayment', compact('data'), [
            'title' => 'Admin Payment',
            'pages' => 'Table Payment'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }
}
