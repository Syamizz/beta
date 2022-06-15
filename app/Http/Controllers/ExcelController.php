<?php

namespace App\Http\Controllers;
use App\Models\IndividuDaftar;
use App\Models\IndividuAlamat;
use App\Models\IndividuPerhubungan;
use App\Models\IndividuAkaun;
use Illuminate\Http\Request;

use App\Exports\IndividuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreIndividuRequest;


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
}
