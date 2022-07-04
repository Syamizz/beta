<?php

namespace App\Exports;

use App\Models\ahli_daftar;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class AhliExport implements FromCollection,WithHeadings
{
    protected $tarikhStart;
    protected $tarikhEnd;

 function __construct($tarikhStart,$tarikhEnd) {
        $this->tarikhStart = $tarikhStart;
        $this->tarikhEnd = $tarikhEnd;
 }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'No ahli',
            'Nama',
            'No KP',
            'Jantina',
            'Bangsa',
            'Tarikh lahir',
            'Pekerjaan',
            'Tarikh daftar'
        ];
    }
    public function collection()
    {
        $kakitangan = DB::table('ahli_daftars')
        ->select(
            'ahli_daftars.noAhli',
            'ahli_daftars.nama',
            'ahli_daftars.noKPBaru',
            'ahli_daftars.jantina',
            'ahli_daftars.bangsa',
            'ahli_daftars.tarikhLahir',
            'ahli_daftars.jawatan',
            'ahli_daftars.tarikhDaftar'
        )->whereBetween('tarikhDaftar',[$this->tarikhStart,$this->tarikhEnd])->get();

    return $kakitangan;
    }
}