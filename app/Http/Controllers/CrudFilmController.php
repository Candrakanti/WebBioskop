<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            'producer' => 'required|max:255',
            'sutradara' => 'required|max:255',
            'penulis' => 'required|max:255',
            'cast' => 'required|max:255',
            'link_trailer' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'sinopsis' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('film-images');
        }

        Film::create($validatedData);

        return redirect('/crudFilm')->with('success', 'New film has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_film)
    {
        $film = Film::where('id_film', $id_film)->first();
        return view('film.detail', compact('film'), [
            'title' => 'Admin Film',
            'active' => 'Admin Film',
            'pages' => 'Detail Film',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Film $film, $id_film)
    // {
    //     $jenis_studio = jenis_studio::all('id_jenis_studio');
    //     return view(
    //         'studio.crud.edit',
    //         compact('jenis_studio'),
    //         [
    //             'studio' => $std,
    //             'title' => 'Edit Studio',
    //             'pages' => 'Edit Studio'
    //         ]
    //     );
    // }

    // public function edit($id_film)
    // {
    //     $film = DB::table('film')->where('id_film', $id_film)->first();
    //     return view('film.edit',  ['film'=> $film],
    //     [
    //         'film' => $film,
    //         'title' => 'Edit Film',
    //         'pages' => 'Edit Film'
    //     ]); 

    // }

    public function edit(Film $film, $id_film)
    {
        $film = DB::table('film')->where('id_film', $id_film)->first();
        return view('film.edit', compact('film'), [
            'film' => $film,
            'title' => 'Edit Film',
            'pages' => 'Edit Film'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Film $film)
    {

        $validatedData = $request->validate([
            'id_film' => 'required|max:255',
            'judul_film' => 'required|max:255',
            'jenis_film' => 'required|max:255',
            // 'jenis_film' => 'required',
            'producer' => 'required|max:255',
            'sutradara' => 'required|max:255',
            'penulis' => 'required|max:255',
            'cast' => 'required|max:255',
            'link_trailer' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'sinopsis' => 'required'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('film-images');
        }

        Film::where('id_film', $request->id_film)->update($validatedData);

        return redirect('/crudFilm')->with('success', 'Film has been updated!');
    }

    // public function update(Request $request, Film $film)
    // {
    //     $film = Film::where('id_film', $request->id_film)
    //          ->update([
    //         'id_film'=>$request->id_film,
    //         'judul_film'=>$request->judul_film,
    //         'jenis_film'=>$request->jenis_film,
    //         'produser'=>$request->produser,
    //         'sutradara'=>$request->sutradara,
    //         'penulis'=>$request->penulis,
    //         'cast'=>$request->cast,
    //         'link_trailer'=>$request->link_trailer,
    //         // 'image'=>$request->image,
    //         'sinopsis'=>$request->sinopsis

    //     ]);

    //     if($request->file('image')) {
    //         if($request->oldImage) {
    //             Storage::delete($request->oldImage);
    //         }
    //         $validatedData['image'] = $request->file('image')->store('film-images');
    //     }


    //     return redirect('/crudFilm')->with('success', 'Data Berhasil Diedit!');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film, $id_film)
    {
        if ($film->image) {
            Storage::delete($film->image);
        }       
        // Film::destroy($film->id_film);
        DB::table('film')->where('id_film', $id_film)->delete();
        return redirect('/crudFilm')->with('success', 'Film has been deleted!');
        // return redirect('/crudFilm')->with('success', 'Data Berhasil Di Hapus');
    }

    // public function search(Request $request)
    // {
    //     if ($request->has('search')) {
    //         $data = Film::where('nama', 'LIKE', '%' .$request->search. '%')->get();
    //     }

    //     else {
    //         $data = Film::all();
    //     }

    //     return view('film.home', ['film' => $data]);
    // }
}
