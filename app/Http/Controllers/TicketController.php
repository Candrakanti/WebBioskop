<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class TicketController extends Controller
{
    public function index()
    {
        $data =       $current = new Carbon();
        return view('ticket.index',  compact('data'),[
            'title' => 'ticket',
            'active' => 'ticket'
        ]);
    }
}
