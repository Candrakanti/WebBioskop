<?php

namespace App\Contracts;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

interface Exportable
{
    /**
     * Export data to Excel.
     *
     * @param Request $request
     * @param Excel $excel
     * @return \Illuminate\Http\Response
     */
    public function exportToExcel(Request $request, Excel $excel);
}