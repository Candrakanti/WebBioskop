<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\jadwal;
use App\Models\Film;
class TicketController extends Controller
{
    public function index()
    {
        // return view('ticket.index', [
        //     "title" => "ticket",
        //     "active" => "ticket"
        // ]);

        $data = \App\Models\jadwal::with(['Film', 'studio'])->get();

        return view('ticket.index', compact('data'), [

            'title' => 'Ticket Bioskop',
            'pages' => 'Ticket Bioskop'
        ]);
    }
}


   

