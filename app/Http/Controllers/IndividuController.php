<?php

namespace App\Http\Controllers;

use App\Models\IndividuDaftar;
use App\Models\IndividuAlamat;
use App\Models\IndividuPerhubungan;
use App\Models\IndividuAkaun;
use Illuminate\Http\Request;

use App\Exports\IndividuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreStudentRequest;

class IndividuController extends Controller
{
    public function daftarIndividu()
    {
        return view('individu.daftarIndividu');
    }

    public function pengesahanIndividu()
    {
        $nama = $_POST['nama'];
        $noKP = $_POST['noKP'];
        $noKPlama = $_POST['noKPlama'];
        $jantina = $_POST['jantina'];
        $tarikh_lahir = $_POST['tarikh_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];

        return view('individu.pengesahanIndividu', [
            "nama" => $nama,
            "noKP" => $noKP,
            "noKPlama" => $noKPlama,
            "jantina" => $jantina,
            "tarikh_lahir" => $tarikh_lahir,
            "tempat_lahir" => $tempat_lahir
        ]);
    }

    public function storeIndividu(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'noKP' => 'required',
            'jantina' => 'required',
            'tarikh_lahir' => 'required',
            'tempat_lahir' => 'required'
        ]);

        $daftar = new IndividuDaftar;

        $daftar->nama = $request->nama;
        $daftar->noKP = $request->noKP;
        $daftar->jantina = $request->jantina;
        $daftar->tarikh_lahir = $request->tarikh_lahir;
        $daftar->tempat_lahir = $request->tempat_lahir;

        $daftar->save();

        $nama = $_POST['nama'];
        $noKP = $_POST['noKP'];

        return view('individu.pengesahanIndividu2', [
            "nama" => $nama,
            "noKP" => $noKP,
        ]);
    }

    public function daftarIndividu2()
    {
        return view('individu.daftarIndividu2', compact('individu'));
    }

    //maklumat individu
    public function maklumatIndividu()
    {
        return view('individu.maklumatIndividu');
    }

    //search individu data
    public function carianIndividu()
    {
        $search = $_POST['search'];
        $search_type = $_POST['query'];

        $individu = IndividuDaftar::where($search_type, 'LIKE', '%' . $search . '%')->get();
        return view('individu.maklumatIndividu2', compact('individu'));
    }

    //display all individu data
    public function displayIndividu()
    {
        $individu = IndividuDaftar::all();

        return view('individu.displayIndividu', compact('individu'));
    }

    //delete maklumat individu
    public function maklumatIndividuDelete($id)
    {
        $individu = IndividuDaftar::find($id);
        $individu->delete();
        return redirect()->route('home');
    }

    //edit maklumat individu
    public function maklumatIndividuEdit($id)
    {
        $individu = IndividuDaftar::find($id);
        $individuAlamat = IndividuAlamat::find($id);
        $individuPerhubungan = IndividuPerhubungan::find($id);
        $individuAkaun = IndividuAkaun::find($id);
        return view('individu.maklumatIndividuEdit',compact('individu','individuAlamat','individuPerhubungan','individuAkaun'));
    }

    //update maklumat individu
    public function maklumatIndividuUpdate(Request $request,$id)
    {
        $individu = IndividuDaftar::find($id);

        $individu->nama = $request->nama;
        $individu->noKP = $request->noKP;
        $individu->jantina = $request->jantina;
        $individu->tarikh_lahir = $request->tarikh_lahir;
        $individu->tempat_lahir = $request->tempat_lahir;

        $individu->save();

        return redirect()->route('home');
    }


    //maklumat individu alamat
    public function maklumatIndividuAlamat(Request $request,$id)
    {
        $individuAlamat = new IndividuAlamat;
        $individuAlamat->id = $request->id;
        $individuAlamat->noKP = $request->noKP;
        $individuAlamat->alamat = $request->alamat;
        $individuAlamat->poskod = $request->poskod;
        $individuAlamat->daerah = $request->daerah;
        $individuAlamat->negeri = $request->negeri;
        $individuAlamat->jenis_alamat = $request->jenis_alamat;
        
        $individuAlamat->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //maklumat individu perhubungan
    public function maklumatIndividuPerhubungan(Request $request,$id)
    {
        $individuPerhubungan = new IndividuPerhubungan;
        $individuPerhubungan->id = $request->id;
        $individuPerhubungan->noKP = $request->noKP;
        $individuPerhubungan->jenis_maklumat = $request->jenis_maklumat;
        $individuPerhubungan->maklumat_perhubungan = $request->maklumat_perhubungan;

        $individuPerhubungan->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }


    //maklumat individu akaun
    public function maklumatIndividuAkaun(Request $request,$id)
    {
        $individuAkaun = new IndividuAkaun;
        $individuAkaun->id = $request->id;
        $individuAkaun->noKP = $request->noKP;
        $individuAkaun->no_akaun = $request->no_akaun;
        $individuAkaun->jenis_akaun = $request->jenis_akaun;

        $individuAkaun->save();

        return redirect()->route('maklumatIndividuEdit',$id);

    }

    //update alamat individu
    public function alamatIndividuUpdate(Request $request,$id)
    {
        $individuAlamat = IndividuAlamat::find($id);
        $individuAlamat->alamat = $request->alamat;
        $individuAlamat->poskod = $request->poskod;
        $individuAlamat->daerah = $request->daerah;
        $individuAlamat->negeri = $request->negeri;
        $individuAlamat->jenis_alamat = $request->jenis_alamat;
        
        $individuAlamat->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //update perhubungan individu
    public function perhubunganIndividuUpdate(Request $request,$id)
    {
        $individuPerhubungan = IndividuPerhubungan::find($id);
        $individuPerhubungan->jenis_maklumat = $request->jenis_maklumat;
        $individuPerhubungan->maklumat_perhubungan = $request->maklumat_perhubungan;

        $individuPerhubungan->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //update akaun individu
    public function akaunIndividuUpdate(Request $request,$id)
    {
        $individuAkaun = IndividuAkaun::find($id);
        $individuAkaun->no_akaun = $request->no_akaun;
        $individuAkaun->jenis_akaun = $request->jenis_akaun;

        $individuAkaun->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //delete alamat individu
    public function alamatIndividuDelete($id)
    {
        $individuAlamat = IndividuAlamat::find($id);
        $individuAlamat->delete();
        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //delete perhubungan individu
    public function perhubunganIndividuDelete($id)
    {
        $individuPerhubungan = IndividuPerhubungan::find($id);
        $individuPerhubungan->delete();
        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //delete akaun individu
    public function akaunIndividuDelete($id)
    {
        $individuAkaun = IndividuAkaun::find($id);
        $individuAkaun->delete();
        return redirect()->route('maklumatIndividuEdit',$id);
    }


}
