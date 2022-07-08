<?php

namespace App\Http\Controllers;

use App\Models\AkaunKoperasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkaunController extends Controller
{
    public function pelayarAkaun()
    {
        $akaun = DB::table('akaun_koperasi')->get();
        return view('akaun.pelayarAkaun',compact('akaun'));
    }

    public function pelayarAkaun2($noAcc)
    {
        $infoAkaun = DB::table('akaun_koperasi')->where('akaun_no', $noAcc)->get();
        $akaun = DB::table('akaun_koperasi')->get();
        return view('akaun.pelayarAkaun2',compact('akaun','infoAkaun'));
    }

    public function infoAkaun($noAcc)
    {
        
        return redirect()->route('pelayarAkaun2',$noAcc);
    }
}
