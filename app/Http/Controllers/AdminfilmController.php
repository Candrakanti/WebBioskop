<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminfilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('film.template.index', [
            'title' => 'Admin Film',
            'active' => 'Admin Film'
        ]);
    }


    public function crud()
    {
        $films = Film::all();
        return view('film.home', compact('films'), [
            'title' => 'Admin Film',
            'active' => 'Admin Film',
            'pages' => 'Data Film',           
    ]);
    }

    public function create()
    {
        return view('film.create', [
            'title' => 'Admin Film',
            'active' => 'Admin Film',
            'pages' => 'Create New Film'
        ]);
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_film' => 'required|max:255',
            'judul_film' => 'required|max:255',
            'jenis_film' => 'required|max:255',
            // 'jenis_film' => 'required',
            'produser' => 'required|max:255',
            'sutradara' => 'required|max:255',
            'penulis' => 'required|max:255',
            'cast' => 'required|max:255',
            'link_trailer' => 'required|max:255',
            'image' =>'image|file|max:1024',
            'sinopsis' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('film-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Film::create($validatedData);

        return redirect('/crudFilm')->with('success', 'New post has been added!');
    }

    public function destroy(film $film, $id_film)
    {
        DB::table('film')->where('id_film', $id_film)->delete();
        return redirect('/crudFilm')->with('success', 'Data Berhasil Di Hapus');
    }
}
