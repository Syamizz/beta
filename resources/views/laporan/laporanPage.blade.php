@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">KOPERASI - Laporan Keahlian</div>
        <div class="card-body">
            <p>Laporan anggota</p>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Jenis laporan:&nbsp;&nbsp;</th>
                        <td><select name="jenis_laporan" id="jenis_laporan" class="form-select">
                            <option value="">Pilih satu</option>
                            <option selected="selected" value="1">Laporan Anggota Baru</option>
                            <option value="12">Laporan Kakitangan</option>
                            <option value="2">Laporan Anggota Mengikut Status</option>
                            <option value="3">Laporan Anggota berhenti </option>
                            <option value="4">Laporan Akaun dibekukan ( Semasa )</option>
                            <option value="5">Laporan Akaun dibekukan ( Sejarah )</option>
                            <option value="6">Laporan Senarai Anggota (SKM)</option>
                            <option value="7">Laporan Tuntutan Tamat</option>
                            <option value="8">Laporan Tuntutan Belum Diterima</option>
                            <option value="9">Laporan Anggota Tiada Tuntutan</option>
                            <option value="10">Laporan Pinjaman Tak Tuntut</option>
                            <option value="11">Laporan Jumlah Tuntutan Bulanan</option>    
                        </select></td>
                    </tr>
                </table>
                <button class="btn btn-secondary" type="submit">Submit</button>
            </form>
            
        </div>
    </div>
</div>

@endsection