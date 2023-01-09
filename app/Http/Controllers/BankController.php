<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
    public function index()
    {
       
        return view('profil.bank', [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
        ]);
    }
}
