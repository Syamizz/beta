<?php

namespace App\Exports;

use App\Models\ahli_berhenti;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class BerhentiExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'User Id',
            'No KP',
            'No Ahli',
            'Tarikh mohon',
            'Tarikh lulus',
            'Tarkih berhenti',
            'Status berhenti',
            'Sebab berhenti',
            'Status kelulusan',
            'Akhir potongan',
            'Tarikh pengembalian',
            'Dicipta', 
            'Dikemaskini'
        ];
    }
    public function collection()
    {
        return ahli_berhenti::all();
    }
}
