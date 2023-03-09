<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\jadwal;
use App\Models\kota;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            
            $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
            ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
            ->where('judul_film', 'LIKE', '%' .$request->search. '%')
            ->get([ 'jadwal.', 'film.', 'studio.*']);
            // $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->where('judul_film', 'LIKE', '%' .$request->search. '%')->get(['kota.', 'jadwal.', 'film.', 'studio.']);
        } else {
            $data = jadwal::join('film', 'film.id_film', '=', 'jadwal.id_film')
            ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
            ->get([ 'jadwal.*', 'film.*', 'studio.*']);
            // $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')->join('film', 'film.id_film', '=', 'jadwal.id_film')->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')->get(['kota.', 'jadwal.', 'film.', 'studio.']);
        }        
        
        $end  =  jadwal::where('tgl_tayang_awal', '<=', Carbon::now());
        // $start  =  jadwal::where('tgl_tayang_awal', '<=', Carbon::now());
        
        return view('home',compact('data' ,'end' ),[
            'title' => 'Home',
            'active' => 'Home'
        ]);
    }

    public function runArtisanCommand(Request $request)
    {
        $output = Artisan::call('cache:clear');
        return redirect('/')->with('success', 'New film has been added!');
    }

    public function playing(){
        $data = kota::join('jadwal', 'jadwal.id_kota', '=', 'kota.id_kota')
        ->join('film', 'film.id_film', '=', 'jadwal.id_film')
        ->join('studio', 'studio.id_studio', '=', 'jadwal.id_studio')
        ->get(['kota.*', 'jadwal.*', 'film.*', 'studio.*']);

        $play =  jadwal::all();
        return view('movie.playing',compact('data' , 'play'),[
            'title' => 'Home',
            'active' => 'Home'
        ]);
    }

    public function contactus (){
        
        return view('ContactUs', [
            'title' => 'Contact us',
            'active' => 'Contact us',
            'pages' => 'Contact us'
        ]);   
    }

}
