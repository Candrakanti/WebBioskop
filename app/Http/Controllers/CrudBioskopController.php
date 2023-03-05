<?php

namespace App\Http\Controllers;

use App;

use App\Models\Bioskop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudBioskopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        if($request->has('search')) {
            $data = Bioskop::where('nama_bioskop', 'LIKE', '%' .$request->search. '%')->get();
            // $films = Film::where('id_film','LIKE','%' .$request->search.'%' );
        } else {
              $data = Bioskop::all();
            // $films = Film::join('jenis_film' ,'jenis_film.id_jenis_film' ,'=','film.id_film')->get(['jenis_film.*','film.*']);
        }
        // $films = Film::all();
        
        return view('studio.bioskop.index', compact('data'), [
            'title' => 'Admin Studio',
            'active' => 'Admin Studio',
            'pages' => 'Data Bioskop',
        ]); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Bioskop::all();
        return view('studio.bioskop.create', compact('data'), [
            'title' => 'Admin Studio',
            'pages' => 'Create new Bioskop'
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
            'id_bioskop' => 'required',
            'nama_bioskop' => 'required',
            'alamat' => 'required',
        ]);
        Bioskop::create($validatedData);
        return redirect('/crudBioskop')->with('success', 'Berhasil Data Telah Ditambahkan!');
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
    public function edit($id_bioskop)
    {
       $data = Bioskop::where('id_bioskop', $id_bioskop)->first();
        return view('studio.bioskop.edit', compact('data') ,
            [
                'title' => 'Edit Bioskop',
                'pages' => 'Edit Bioskop'
            ]
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_bioskop)
    {
        $data = Bioskop::where('id_bioskop', $request->id_bioskop)
        ->update([
            'id_bioskop' => $request->id_bioskop,
            'nama_bioskop' => $request->nama_bioskop,
            'alamat' => $request->alamat,

        ]);

    return redirect('/crudBioskop')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_bioskop)
    {
        DB::table('bioskop')->where('id_bioskop', $id_bioskop)->delete();
        return redirect('/crudBioskop')->with('success', 'Data Berhasil Di Hapus');
    }
}
