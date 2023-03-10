<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
    
use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection 
{
    
    use Exportable;
    
    protected $from_date;
    protected $to_date;

    function __construct($from_date,$to_date) {
            $this->from_date = $from_date;
            $this->to_date = $to_date;
    }
    
    public function query()
    {
        $data = DB::table('payment')
->whereBetween('pdate',[ $this->from_date,$this->to_date])
->select('id_payment','harga','status_bayar')
->orderBy('id_payment');


        return $data;
    }

    public function headings(): array
    {
        return [
            'Owner Manager',
            'CSR Name',
            'CSR Aid',
        ];
    }

    public function collection()
    {
        //
    }
}
