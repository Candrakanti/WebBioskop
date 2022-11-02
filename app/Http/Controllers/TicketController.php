<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\studio;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        $data = studio::join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')->join('detail_jenis_studio', 'detail_jenis_studio.id_jenis_studio', '=', 'studio.id_jenis_studio')
            ->join('film', 'film.id_film', '=', 'jadwal.id_film')
            ->get(['studio.*', 'jadwal.*', 'film.*', 'detail_jenis_studio.*']);

        return view('ticket.index', compact('data'), [
            'title' => 'ticket',
            'active' => 'ticket'
        ]);
    }
}
