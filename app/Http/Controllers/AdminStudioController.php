<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStudioController extends Controller
{
    public function __construct()
    {
        $this->middleware('cekstudio:admin_studio');
    }

    public function index()
    {
        return view('studio.index', [
            'title' => 'Admin Studio',
            'active' => 'Admin Studio'
        ]);
    }

    // public function Studio()
    // {
    //     return view('studio.template.LayoutStudio', [
    //         'title' => 'Admin Studio',
    //         'active' => 'Admin Studio'
    //     ]);
    // }

    public function Table()
    {
        return view('studio.templateDashboard.table', [
            'title' => 'Admin Studio',
            'active' => 'Admin Studio'
        ]);
    }
    public function crudJadwal()
    {
        return view('studio.template.CrudJadwal', [
            'title' => 'Admin Studio',
            'active' => 'Admin Studio'
        ]);
    }
}
