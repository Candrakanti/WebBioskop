<?php

namespace App\Http\Controllers;

use App\Models\jenis_studio;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CrudDetStudioController extends Controller
{
    public function index( Request $request)
    {
        $data = jenis_studio::all();

        return view('studio.crudDetStudio.index', compact('data'), [
            'title' => 'Admin Studio',
            'active' => 'Admin Studio',
            'pages' => 'Data Detail Studio',
        ]); 
        
    }

    public function create()
    {
        $jenis_studio = jenis_studio::all();

        return view('studio.crudDetStudio.create',  compact('jenis_studio'), [
            // 'jenis_studio' => jenis_studio::all(),
            'title' => 'Admin Studio',
            'pages' => 'Create New Data Detail studio'
        ]);

    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'id_jenis_studio' => 'required',
            'jenis_studio' => 'required',
            'harga' => 'required',
        ]);
        jenis_studio::create($validatedData);
        return redirect('/crudDetStudio')->with('success', 'Berhasil Data Telah Ditambahkan!');
    }

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
    public function edit($id_jenis_studio)
    {
        $jenis_studio = jenis_studio::all();

        $data = jenis_studio::where('id_jenis_studio', $id_jenis_studio)->first();

        return view('studio.crudDetStudio.edit', compact('jenis_studio', 'data') , [
            'title' => 'Admin Studio',
            'pages' => 'Edit Data Detail Studio'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jenis_studio)
    {
        $jenis_studio = jenis_studio::where('id_jenis_studio', $request->id_jenis_studio)
            ->update([
                
                'id_jenis_studio' => $request->id_jenis_studio,
                'jenis_studio' => $request->jenis_studio,
                'harga' => $request->harga

            ]);

        return redirect('/crudDetStudio')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jenis_studio)
    {
        DB::table('detail_jenis_studio')->where('id_jenis_studio', $id_jenis_studio)->delete();
        return redirect('/crudDetStudio')->with('success', 'Data Berhasil Di Hapus');
    }
}
