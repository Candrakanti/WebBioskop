<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class AdminfilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('film.template.index');
    }
    public function crud()
    {
        $films = Film::all();
        return view('film.home', compact('films'));
    }

    public function hapusfilm(Request $request){
      
       
        $film = Film::where('id_film', $request->id)->delete();    

        return redirect("/crudFilm")->with('success', 'Data Film Berhasil Di Hapus');
    }

    public function destroy(film $films)
    {
        $films->delete();
        return redirect("/film/home")
        ->with('success', 'sipp');
    }

    public function input()
    {
        return view('film.input');
    }
}
