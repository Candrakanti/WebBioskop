<?php

namespace App\Http\Controllers;

use App\Models\CrudJadwal;
use App\Models\Studio;
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
    public function index()
    {
        $jd = CrudJadwal::all();
        return view('studio.crudJadwal.LayoutJadwal', compact('jd'), [
            'title' => 'Admin Studio',
            'pages' => 'Table Studio'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = CrudJadwal::join('film', 'studio.id_film', '=', 'jadwal.id_film')
        ->join ('studio' , 'studio'.'id_studio' , '=', 'jadwal'.'id_studio') 
            ->get(
                ['jadwal.*', 'film.*' ,'studio.*']
            );

        return view('studio.crudJadwal.input', compact('data'),  [
            // 'jenis_studio' => jenis_studio::all(),
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

            'id_jadwal' => 'required|max:5|unique:studio',
            'id_studio' => 'required',
            'id_film' => 'required',
            'tgl_tayang_awal' => 'required',
            'tgl_tayang_akhir' => 'required',
            'tgl_tayang_awal' => 'required',
        ]);

        studio::create($validatedData);
        return redirect('/CrudJadwal')->with('success', 'Berhasil Data Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrudJadwal  $crudJadwal
     * @return \Illuminate\Http\Response
     */
    public function show(CrudJadwal $crudJadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrudJadwal  $crudJadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudJadwal $crudJadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CrudJadwal  $crudJadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrudJadwal $crudJadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrudJadwal  $crudJadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudJadwal $crudJadwal, $id_jadwal)
    {
        DB::table('jadwal')->where('id_jadwal', $id_jadwal)->delete();
        return redirect('/crudJadwal')->with('success', 'Data Berhasil Di Hapus');
    }
}
