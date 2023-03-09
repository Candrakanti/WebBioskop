<?php

namespace App\Http\Controllers;

use App\Models\_detail_jam;
use App\Models\Bioskop;
use App\Models\_detail_bioskop;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CrudDetJamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        if($request->has('search')) {
            $data = _detail_jam::where('id_bioskop', 'LIKE', '%' .$request->search. '%')->get();
            // $films = Film::where('id_film','LIKE','%' .$request->search.'%' );
        } else {
              $data = _detail_jam::all();
            // $films = Film::join('jenis_film' ,'jenis_film.id_jenis_film' ,'=','film.id_film')->get(['jenis_film.*','film.*']);
        }
        // $films = Film::all();
        
        return view('studio.detjam.index', compact('data'), [
            'title' => 'Admin Studio',
            'active' => 'Admin Studio',
            'pages' => 'Data Detail Jam',
        ]); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $_detail_jam = _detail_jam::all();
        $bioskop = Bioskop::all();
        $_detail_bioskop = _detail_bioskop::all();

        return view('studio.detjam.create',  compact('_detail_jam' , 'bioskop' , '_detail_bioskop'), [
            // 'jenis_studio' => jenis_studio::all(),
            'title' => 'Admin Studio',
            'pages' => 'Create New Data Detail Jam'
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
            'id_det_jam' => 'required|min:5|max:225|unique:detail_jam',
            'id_db' => 'required',
            'id_jadwal' => 'required',
            'jam_tayang' => 'required',
        ]);
        _detail_jam::create($validatedData);
        return redirect('/crudDetjam')->with('success', 'Berhasil Data Telah Ditambahkan!');
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
    public function edit($id_det_jam)
    {
        $_detail_jam = _detail_jam::all();
        $bioskop = Bioskop::all();
        $_detail_bioskop = _detail_bioskop::all();

        $data = _detail_jam::where('id_det_jam', $id_det_jam)->first();

        return view('studio.detjam.edit', compact('_detail_jam' , 'bioskop' , '_detail_bioskop', 'data') , [
            'title' => 'Admin Studio',
            'pages' => 'Edit Data Detail Jam'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_det_jam)
    {
        $_detail_jam = _detail_jam::where('id_det_jam', $request->id_det_jam)
            ->update([
                
                'id_db' => $request->id_db,
                'id_jadwal' => $request->id_jadwal,
                'jam_tayang' => $request->jam_tayang

            ]);

        return redirect('/crudDetjam')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_det_jam)
    {
        DB::table('detail_jam')->where('id_det_jam', $id_det_jam)->delete();
        return redirect('/crudDetjam')->with('success', 'Data Berhasil Di Hapus');
    }
}
