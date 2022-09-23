<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaydoneController extends Controller
{
    public function index(){

        return view('profil.paydone', [
            'title' => 'Mycgv',
            'active' => 'Mycgv'
        ]);
    }
}
