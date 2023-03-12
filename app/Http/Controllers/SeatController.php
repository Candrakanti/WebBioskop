<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index()
    {
        return view('ticket.seat.index', [
            'title' => 'movie',
            'active' => 'movie'
        ]);
    }
}
