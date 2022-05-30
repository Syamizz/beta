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
}
