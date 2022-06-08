<?php

namespace App\Http\Controllers;


use App\Models\ahli_daftar;
use App\Models\ahli_alamat;
use App\Models\ahli_bank;
use App\Models\ahli_berhenti;
use App\Models\ahli_perhubungan;
use Laravel\Ui\Presets\React;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\SyarikatDaftar;
use App\Models\SyarikatAlamat;


class AhliController extends Controller
{
    public function cariMaklumatPejabat()
    {
        $search = $_POST['carianPejabat'];
        $search_type = $_POST['jenisCarianPejabat'];

        $syarikat = SyarikatDaftar::where($search_type, 'LIKE', '%' . $search . '%')->get();
        $syarikatAlamat = SyarikatAlamat::where($search_type, 'LIKE', '%' . $search . '%')->get();

        return view('ahli.daftarAhli', compact('syarikat','syarikatAlamat'));
    }

    public function maklumatAhliCari()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $ahli = ahli_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();
        
        return view('ahli.maklumatAhli2', compact('ahli'));
    }

    public function maklumatAhliHasil($noKPBaru)
    {
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil', compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }
}
