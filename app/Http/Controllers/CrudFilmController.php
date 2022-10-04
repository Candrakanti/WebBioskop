<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CrudFilmController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $films = Film::all();
        return view('film.home', compact('films'), [
            'title' => 'Admin Film',
            'active' => 'Admin Film',
            'pages' => 'Data Film',           
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('film.create', [
            'title' => 'Admin Film',
            'active' => 'Admin Film',
            'pages' => 'Create New Film'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_film)
    {
        DB::table('film')->where('id_film', $id_film)->delete();
        return redirect('/crudFilm')->with('success', 'Data Berhasil Di Hapus');
    }
}
