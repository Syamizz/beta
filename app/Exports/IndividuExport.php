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
            'id',
            'nama',
            'noKP',
            'noKPlama',
            'jantina',
            'tarikh_lahir',
            'tempat_lahir',
            'created_at',
            'updated_at' 
        ];
    } 
    public function collection()
    {
        return IndividuDaftar::all();
    }
}
