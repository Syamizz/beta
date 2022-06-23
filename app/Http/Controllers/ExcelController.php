<?php

namespace App\Http\Controllers;
use App\Models\IndividuDaftar;
use App\Models\IndividuAlamat;
use App\Models\IndividuPerhubungan;
use App\Models\IndividuAkaun;
use Illuminate\Http\Request;

use App\Exports\IndividuExport;
use App\Exports\KakitanganExport;
use App\Exports\BerhentiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreIndividuRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ExcelController extends Controller
{
    public function studentPage()
    {
        return view('student.index');
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = IndividuDaftar::paginate(5);       
        return view('student.index',compact('students'));
    }
 
    
    public function get_individu_data()
    {
        return Excel::download(new IndividuExport, 'individu_daftar.xlsx');
    }

    public function jenisLaporan()
    {
        $jenisLaporan = $_POST['jenis_laporan'];
        return redirect()->route($jenisLaporan);
    }

    public function get_kakitangan_data()
    {
        return Excel::download(new KakitanganExport,'laporan kakitangan.xlsx');
    }

    

    public function get_berhenti_data()
    {
        return Excel::download(new BerhentiExport,'laporan anggota berhenti.xlsx');
    }
}




/*public function dataKakitangan()
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

    return view('laporan.laporanKakitangan',compact('kakitangan'));

}*/
