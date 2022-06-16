<?php

namespace App\Exports;

use App\Models\IndividuDaftar;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class IndividuExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'Nama',
            'No KP',
            'No KP Lama',
            'Jantina',
            'Tarikh Lahir',
            'Tempat Lahir',
            'Dicipta',
            'Dikemaskini' 
        ];
    } 
    public function collection()
    {
        return IndividuDaftar::all();
    }
}
