<?php

namespace App\Http\Controllers;

use App\Models\table_history_jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = table_history_jadwal::all();
        return view('film.history.index', compact('data'),  [
            'title' => 'Admin Studio',
            'active' => 'Admin Studio',
            'pages' => 'History Jadwal',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id_jadwal)
    {

        $data = DB::table('history_jadwal')->where('id_jadwal', $id_jadwal)->first();

        return view('film.history.update', compact('data'),   [
            'title' => 'Admin Studio',
            'active' => 'Admin Studio',
            'pages' => 'Update History Jadwal',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jadwal)
    {
        //    return $request;
        $history_jadwal = table_history_jadwal::where('id_jadwal', $request->id_jadwal)
        ->update([
            'id_jadwal' => $request->id_jadwal,
            'id_studio' => $request->id_studio,
            'id_film' => $request->id_film,
            'tgl_tayang_awal' => $request->tgl_tayang_awal,
            'tgl_tayang_akhir' => $request->tgl_tayang_akhir,
        ]);


        return redirect('/history')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jadwal)
    {
        DB::table('table_history_jadwal')->where('id_jadwal', $id_jadwal)->delete();
        return redirect('/crudJadwal')->with('success', 'Data Berhasil Di Hapus');
    }
}
