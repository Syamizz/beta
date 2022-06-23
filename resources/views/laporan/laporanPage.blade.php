@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">KOPERASI - Laporan Keahlian</div>
        <div class="card-body">
            <p>Laporan anggota</p>
            <form action="{{route('jenisLaporan')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <table>
                    <tr>
                        <th>Jenis laporan:&nbsp;&nbsp;</th>
                        <td><select name="jenis_laporan" id="jenis_laporan" class="form-select">
                            <option value="">Pilih satu</option>
                            <option selected="selected" value="1">Laporan Anggota Baru</option>
                            <option value="kakitangan.export">Laporan Kakitangan</option>
                            <option value="2">Laporan Anggota Mengikut Status</option>
                            <option value="berhenti.export">Laporan Anggota berhenti </option>
                        </select></td>
                    </tr>
                </table>
                <br>
                <button class="btn btn-secondary" type="submit">Submit</button>
            </form>
            
        </div>
    </div>
</div>

@endsection