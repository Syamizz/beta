<?php

namespace App\Exports;

use App\Models\kakitangan_daftar;
use App\Models\kakitangan_alamat;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class KakitanganExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'No Staff',
            'No KP',
            'Alamat',
            'Poskod',
            'Daerah',
            'Negeri' 
        ];
    }
    public function collection()
    {
        $kakitangan = DB::table('kakitangan_daftars')
            ->join('kakitangan_alamats','kakitangan_daftars.noKPBaru','=', 'kakitangan_daftars.noKPBaru')
            ->select(
                'kakitangan_daftars.id',
                'kakitangan_daftars.noStaff',
                'kakitangan_daftars.noKPBaru',
                'kakitangan_alamats.alamat',
                'kakitangan_alamats.poskod',
                'kakitangan_alamats.daerah',
                'kakitangan_alamats.negeri'
            )->get();

        return $kakitangan;
    }
}
