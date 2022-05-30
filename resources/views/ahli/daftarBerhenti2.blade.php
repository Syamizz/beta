@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Ahli Berhenti</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Carian Ahli</h4>
                    <form action="{{ route('cariAhliBerhenti') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                            <tr>
                                <th>
                                    <label for="carian">Masukkan Carian Anda</label>
                                </th>
                                <td>
                                    <input type="text" name="carian" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jenisCarian">Jenis Carian</label>
                                </th>
                                <td>
                                    <select name="jenisCarian" class="form-select">
                                        <option value="noAhli">No Ahli</option>
                                        <option value="nama">Nama</option>
                                        <option value="noKPBaru">No Kp Baru</option>
                                        <option value="noKPLama">No Kp Lama</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-secondary">Cari</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No Ahli</th>
                            <th>Tarikh Masuk</th>
                            <th>Tarikh Berhenti</th>
                            <th>Nama</th>
                            <th>No KP Baru</th>
                            <th>No KP Lama</th>
                        </tr>
                        @foreach ($ahli as $item)
                            <tr>
                                <td>{{ $item->noAhli }}</td>
                                <td>{{ $item->tarikhDaftar }}</td>
                                <td></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->noKPBaru }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-body">
                    <form action="{{ route('daftarBerhentiTambah')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                            <input type="hidden" name="noKPBaru" value="{{$item->noKPBaru}}">
                            <tr>
                                <th>
                                    <label for="tarikhMohon">Tarikh Mohon</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhMohon" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="statusBerhenti">Status Berhenti</label>
                                </th>
                                <td>
                                    <select name="statusBerhenti" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="BERHENTI KERANA BERSARA">BERHENTI KERANA BERSARA</option>
                                        <option value="BERHENTI KERANA KEMATIAN">BERHENTI KERANA KEMATIAN</option>
                                        <option value="BERHENTI KERANA SEBAB PERIBADI">BERHENTI KERANA SEBAB PERIBADI</option>
                                        <option value="DIBERHENTIKAN OLEH KOPERASI">DIBERHENTIKAN OLEH KOPERASI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="sebabBerhenti">Nyatakan sebab (Jika ada)</label>
                                </th>
                                <td>
                                    <input type="text" name="sebabBerhenti" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">
                                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                                    <button class="btn btn-danger btn-block">Batal</button>
                                </th>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@if (session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif
