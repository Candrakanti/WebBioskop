<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\Film;
use App\Models\studio;
use App\Models\kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudJadwalController extends Controller
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
    public function index( Request $request)
    {
        if($request->has('search')) {
            $data = jadwal::where('id_jadwal', 'LIKE', '%' .$request->search. '%')->get();
            // $data = Film::where('id_film','LIKE','%' .$request->search.'%' );
        } else {
            $data = studio::join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')
            ->join('film', 'film.id_film', '=', 'jadwal.id_film')
            ->get(['studio.*', 'jadwal.*', 'film.*']);
        }
        // $data = studio::with(relations: 'studio')->get();
        // $data1 = film::with(relations: 'film')->get();
        // $data = jadwal::with('jadwals')->get();
        // $data = \App\Models\jadwal::with(['studio', 'Film'])->get();
        
        return view('studio.crudJadwal.LayoutJadwal', compact('data'), [

            'title' => 'Admin Studio',
            'pages' => 'Table Jadwal'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = studio::join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')
        //     ->join('film', 'film.id_film', '=', 'jadwal.id_film')
        //     ->get(['studio.*', 'film.*', 'jadwal.*']);

        $data =  studio::all();
        $data1 =  Film::all();
        $data2 =  jadwal::all();
        $data3 =  kota::all();
        return view('studio.crudJadwal.input', compact('data', 'data1', 'data2', 'data3'),  [
            'title' => 'Admin Studio',
            'pages' => 'Input Jadwal'
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
            'id_jadwal' => 'required|min:5|max:10|unique:jadwal',
            'id_studio' => 'required',
            'id_film' => 'required',
            'id_kota' => 'required',
            // 'id_bioskop' => 'required',
            'tgl_tayang_awal' => 'required',
            'tgl_tayang_akhir' => 'required',
            'jam_tayang' => 'required',
        ]);

        jadwal::create($validatedData);
        return redirect('/crudJadwal')->with('success', 'Berhasil Data Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal $crudJadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $crudJadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $crudJadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jadwal)
    {
        // $data = jadwal::join('film', 'jadwal.id_film', '=', 'film.id_film')->join('studio', 'jadwal.id_studio', '=', 'studio.id_studio')->get('jadwal.*', 'film.*', 'studio.*')->where('id_jadwal', $id_jadwal)->first();
        // $jadwal =  DB::table('jadwal')->where('id_jadwal', $id_jadwal)->first();
        $studio =  studio::all();
        $film =  Film::all();

        $data = studio::join('jadwal', 'jadwal.id_studio', '=', 'studio.id_studio')
            ->join('film', 'film.id_film', '=', 'jadwal.id_film')
            ->get(['studio.*', 'jadwal.*', 'film.*'])->where('id_jadwal', $id_jadwal)->first();

        return view(
            'studio.crudJadwal.edit',
            compact('data', 'studio', 'film'),
            [
                'studio' => $data,
                'title' => 'Edit Jadwal',
                'pages' => 'Edit Jadwal'
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $crudJadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $crudJadwal)
    {
        $jadwal = jadwal::where('id_jadwal', $request->id_jadwal)
            ->update([
                'id_jadwal' => $request->id_jadwal,
                'id_studio' => $request->id_studio,
                'id_film' => $request->id_film,
                'tgl_tayang_awal' => $request->tgl_tayang_awal,
                'tgl_tayang_akhir' => $request->tgl_tayang_akhir,
                'jam_tayang' => $request->jam_tayang,
                // 'jam_tayang1' => $request->jam_tayang1,

            ]);

        return redirect('/crudJadwal')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $crudJadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $crudJadwal, $id_jadwal)
    {
        DB::table('jadwal')->where('id_jadwal', $id_jadwal)->delete();
        return redirect('/crudJadwal')->with('success', 'Data Berhasil Di Hapus');
    }
}
