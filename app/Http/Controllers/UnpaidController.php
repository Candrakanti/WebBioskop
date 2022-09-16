<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnpaidController extends Controller
{
    public function index()
    {
        return view('profil.unpaid', [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
        ]);
    }
}
