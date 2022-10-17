<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\studio;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\jadwal;
use App\Models\Film;
// use App\Models\studio;
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

        // $data = studio::join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')
        //     ->join('film', 'film.id_film', '=', 'jadwal.id_film')
        //     ->get(['studio.*', 'jadwal.*', 'film.*', 'detail_jenis_studio.*']);
        // $data = jadwal::all();

        // return view('ticket.index', compact('data'), [
        //     'title' => 'ticket',
        //     'active' => 'ticket'

        ]);
    }
}


   

