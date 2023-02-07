<?php

namespace App\Http\Controllers;

use App\Models\_detail_bioskop;
use Illuminate\Http\Request;
use App\Models\Bioskop;
use App\Models\jadwal;

use Illuminate\Support\Facades\DB;


class CrudDetBioskopController extends Controller
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

    public function index(Request $request)
    {
        if($request->has('search')) {
            $data = _detail_bioskop::where('id_db', 'LIKE', '%' .$request->search. '%')->get();
          
        } else {
            $data = _detail_bioskop::all();
        }

        $db = Bioskop::join('_detail_bioskop' , '_detail_bioskop.id_bioskop' ,'=' , 'bioskop.id_bioskop')->get(['_detail_bioskop.*' ,'bioskop.*']);
        return view('studio.CrudDetBioskop.index', compact('db' ,'data'), [
            'title' => 'Admin Studio',
            'pages' => 'Table Detail Bioskop'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bioskop = Bioskop::all();
        $jadwal = jadwal::all();
        return view('studio.CrudDetBioskop.input', compact('bioskop' , 'jadwal') , [
            'title' => 'Admin Studio',
            'pages' => 'Tambah Detail Bioskop'
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
          
            'id_db' => 'required|min:5|max:225|unique:_detail_bioskop',
            'id_bioskop' => 'required',
            'id_jadwal' => 'required',
        ]);

        _detail_bioskop::create($validatedData);
        return redirect('/detbioskop')->with('success', 'Berhasil Data Telah Ditambahkan!');
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
    public function edit($id_db)
    {
        $bioskop = Bioskop::all();
        $jadwal = jadwal::all();

        $data = _detail_bioskop::where('id_db', $id_db)->first();

        return view('studio.CrudDetBioskop.edit', compact('bioskop' , 'jadwal' , 'data') , [
            'title' => 'Admin Studio',
            'pages' => 'Tambah Detail Bioskop'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_db)
    {
        $_detail_bioskop = _detail_bioskop::where('id_db', $request->id_db)
            ->update([
                'id_db' => $request->id_db,
                'id_bioskop' => $request->id_bioskop,
                'id_jadwal' => $request->id_jadwal

            ]);

        return redirect('/detbioskop')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_db)
    {
        DB::table('_detail_bioskop')->where('id_db', $id_db)->delete();
        return redirect('/detbioskop')->with('success', 'Data Berhasil Di Hapus');
    }
}
