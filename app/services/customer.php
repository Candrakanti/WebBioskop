<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Contracts\Exportable;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel as ExcelFacade;

class customer implements Exportable
{
    public function exportToExcel(Request $request, Excel $excel)
    {
        $data = User::all();
        $fileName = 'users.xlsx';
        $sheetName = 'Sheet1';
        
        return ExcelFacade::download(new CustomerExport($data), $fileName, $excel::XLSX, [
            'Content-Type' => 'application/vnd.ms-excel'
        ]);
    }
}