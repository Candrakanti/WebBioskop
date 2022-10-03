<?php

namespace App\Http\Controllers;

use App\Models\studio;
use App\Models\jenis_studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudStudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $std = studio::all();
        return view('studio.crud.LayoutStudio', compact('std'), [
            'title' => 'Admin Studio',
            'pages' => 'Table Studio'
        ]);
        // return view('studio.LayoutStudio')->with('studio', $studio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_studio = jenis_studio::all();
        return view('studio.crud.input',  compact('jenis_studio'), [
            // 'jenis_studio' => jenis_studio::all(),
            'title' => 'Admin Studio',
            'pages' => 'Table Studio'
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

        $validatedData =  $request->validate([

            'id_studio' => 'required|max:5|unique:studio',
            'id_jenis_studio' => 'required',
            'audiotori' => 'required',
            'jumlah_kursi' => 'required',
        ]);

        studio::create($validatedData);
        return redirect('/CrudStudio')->with('success', 'Berhasil Data Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studio  $crudStudio
     * @return \Illuminate\Http\Response
     */
    public function show(studio $studio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(studio $studio, $id_studio)
    {
        $jenis_studio = jenis_studio::all('id_jenis_studio');
        $std = DB::table('studio')->where('id_studio', $id_studio)->first();
        return view(
            'studio.crud.edit',
            compact('jenis_studio'),
            [
                'studio' => $std,
                'title' => 'Edit Studio',
                'pages' => 'Edit Studio'
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studio $studio)
    {
        $studio = studio::where('id_studio', $request->id_studio)
            ->update([
                'id_studio' => $request->id_studio,
                'id_jenis_studio' => $request->id_jenis_studio,
                'audiotori' => $request->audiotori,
                'jumlah_kursi' => $request->jumlah_kursi,

            ]);

        return redirect('/CrudStudio')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studio  $studio
     * @return \Illuminate\Http\Response
     */



    public function destroy(studio $studio, $id_studio)
    {
        // studio::find($id_studio)->delete();
        // return redirect('/CrudStudio')->with('success', 'Data Berhasil Di Hapus');
        DB::table('studio')->where('id_studio', $id_studio)->delete();
        return redirect('/CrudStudio')->with('success', 'Data Berhasil Di Hapus');
    }
}
