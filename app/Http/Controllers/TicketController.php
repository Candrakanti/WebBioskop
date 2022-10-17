<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\jadwal;
use App\Models\Film;
use App\Models\studio;
use App\Models\jenis_studio;
class TicketController extends Controller
{
    public function index()
    {
        // return view('ticket.index', [
        //     "title" => "ticket",
        //     "active" => "ticket"
        // ]);

        // $data = \App\Models\jadwal::with(['Film', 'studio'])->get();
        $Film= Film::all();
        $studio= studio::all();
        $jenis_studio= jenis_studio::all();
        $jadwal= jadwal::all();

        // $data = \App\Models\jadwal::with(['studio', 'film','jenis_studio'])->get();
        return view('ticket.index', compact('Film','studio','jenis_studio','jadwal'), [

            'title' => 'Ticket Bioskop',
            'pages' => 'Ticket Bioskop'
        ]);
    }
}


   

