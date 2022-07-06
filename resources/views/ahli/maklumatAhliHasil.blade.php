<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inter XS</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap-4-navbar.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('public/js/bootstrap-4-navbar.js') }}"></script>

    <!-- Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ 'Inter XS' }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ 'Toggle navigation' }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ahli</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('maklumatAhli') }}">Maklumat Ahli</a>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Pendaftaran
                                        {{-- &raquo; --}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('daftarAhli') }}">Daftar Ahli</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('daftarYuran') }}">Yuran
                                                Pendaftaran</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown-toggle" href="#">Pemberhentian</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('daftarBerhenti') }}">Daftar
                                                Berhenti</a></li>
                                        <li><a class="dropdown-item" href="{{ route('maklumatBerhenti') }}">Maklumat
                                                Berhenti</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('kelulusanPemberhentian') }}">Kemaskini Kelulusan
                                                Pemberhentian</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Laporan Keahlian</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Ahli</a></li>
                                <li><a class="dropdown-item" href="#">Penyata</a></li>
                                <li><a class="dropdown-item" href="#">Tuntutan</a></li>
                                <li><a class="dropdown-item" href="#">Tuntutan Tak Berbayar</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Baki Caruman</a></li>
                                <li><a class="dropdown-item" href="#">Sticker Anggota</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Individu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('daftarIndividu') }}">Daftar
                                        Individu</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('maklumatIndividu') }}">Maklumat
                                        Individu</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Syarikat
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('daftarSyarikat') }}">Daftar
                                        Syarikat</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('maklumatSyarikat') }}">Maklumat
                                        Syarikat</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Akaun
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Pentadbiran Akaun</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Akaun Semasa</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Bulanan</a></li>
                                <li><a class="dropdown-item" href="#">Pemiutang</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pelbagai
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perubatan</a></li>
                                <li><a class="dropdown-item" href="#">Pembekuan Akaun</a></li>
                                <li><a class="dropdown-item" href="#">Derma</a></li>
                                <li><a class="dropdown-item" href="#">Dividen/Keuntungan</a></li>
                                <li><a class="dropdown-item" href="#">Keuntungan Pembiayaan</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Kakitangan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('daftarKakitangan') }}">Daftar
                                        Kakitangan</a></li>
                                <li><a class="dropdown-item" href="{{ route('maklumatStaff') }}">Maklumat
                                        Kakitangan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pembiayaan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Kira Kelayakan</a></li>
                                <li><a class="dropdown-item" href="#">Daftar Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Maklumat Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Kelulusan</a></li>
                                <li><a class="dropdown-item" href="#">Bon</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Maklumat Penjamin</a></li>
                                <li><a class="dropdown-item" href="#">Jadual Pembayaran</a></li>
                                <li><a class="dropdown-item" href="#">Kira Rebat</a></li>
                                <li><a class="dropdown-item" href="#">Kira Insuran</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Pembiayaan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pentadbiran
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Ahli</a></li>
                                <li><a class="dropdown-item" href="#">Caruman</a></li>
                                <li><a class="dropdown-item" href="#">Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Akaun</a></li>
                                <li><a class="dropdown-item" href="#">No Rujukan</a></li>
                                <li><a class="dropdown-item" href="#">Sekuriti</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Kaunter
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Yuran Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Ahli</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Am</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Dalaman</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Penerimaan Harian</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">i-Akaun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Laporan TTB</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Site Settings</a></li>
                                <li><a class="dropdown-item" href="#">Tabs</a></li>
                                <li><a class="dropdown-item" href="#">Security Roles</a></li>
                                <li><a class="dropdown-item" href="#">User Accounts</a></li>
                                <li><a class="dropdown-item" href="#">Vendors</a></li>
                                <li><a class="dropdown-item" href="#">Site Log</a></li>
                                <li><a class="dropdown-item" href="#">Bulk Email</a></li>
                                <li><a class="dropdown-item" href="#">File Manager</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Host
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Host Settings</a></li>
                                <li><a class="dropdown-item" href="#">Portals</a></li>
                                <li><a class="dropdown-item" href="#">Module Definitions</a></li>
                                <li><a class="dropdown-item" href="#">File Manager</a></li>
                                <li><a class="dropdown-item" href="#">Vendors</a></li>
                                <li><a class="dropdown-item" href="#">SQL</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ 'Login' }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ 'Register' }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Koperasi - Maklumat Ahli</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>

                            <th scope="col">Penyata</th>
                            <th scope="col">No Anggota</th>
                            <th scope="col">Tarikh Keahlian</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No KP Baru</th>
                            <th scope="col">No KP Lama</th>
                            <th scope="col">Jawatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Cara Bayaran</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <th>{{ $ahli->noAhli }}</th>
                            <th>{{ $ahli->tarikhDaftar }}</th>
                            <th>{{ $ahli->nama }}</th>
                            <th>{{ $ahli->noKPBaru }}</th>
                            <th>{{ $ahli->noKPLama }}</th>
                            <th>{{ $ahli->jawatan }}</th>
                            <th>{{ $ahli->statusAhli }}</th>
                            <th>{{ $ahli->caraPembayaran }}</th>
                            <th>
                                <a href="{{ route('maklumatAhliKemaskini', $ahli->noKPBaru) }}"
                                    class="btn btn-success btn-block">Kemaskini</a>
                            </th>
                        </tr>
                    </table>
                    <br>
                    <button class="btn btn-secondary btn-block" id="btn_alamat">Alamat</button>

                    <button class="btn btn-secondary btn-block" id="btn_pejabat">Pejabat/Pembayar Gaji</button>

                    <button class="btn btn-secondary btn-block" id="btn_noTel">Perhubungan</button>

                    <button class="btn btn-secondary btn-block" id="btn_akaun">Akaun Bank</button>

                    <button class="btn btn-secondary btn-block" id="btn_waris">Tanggungan Waris</button>

                    <button class="btn btn-secondary btn-block" id="btn_caruman">Caruman</button>

                    <button class="btn btn-secondary btn-block" id="btn_pembiayaan">Pembiayaan</button>

                </div>

                <div class="card-body">
                    <div class="col-md-12" id="appearAlamat" style="display: none">
                        <h4>Maklumat Alamat</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Jenis Alamat</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Poskod</th>
                                <th scope="col">Bandar</th>
                                <th scope="col">Negeri</th>
                                <th scope="col">Dicipta Oleh</th>
                                <th scope="col">Dicipta pada</th>
                                <th scope="col">Dikemaskini oleh</th>
                                <th scope="col">Dikemaskini pada</th>
                                <th scope="col">Kemaskini</th>
                                <th scope="col">Padam</th>
                            </tr>
                            @if ($alamat == true)
                                <tr>
                                    {{-- <input type="hidden" name="noKPBaru" value="{{$alamat->noKPBaru}}"> --}}
                                    <th scope="row">{{ $alamat->jenisAlamat }}</th>
                                    <th>{{ $alamat->alamat }}</th>
                                    <th>{{ $alamat->poskod }}</th>
                                    <th>{{ $alamat->bandar }}</th>
                                    <th>{{ $alamat->negeri }}</th>
                                    <th></th>
                                    <th>{{ $alamat->created_at }}</th>
                                    <th></th>
                                    <th>{{ $alamat->updated_at }}</th>
                                    <th><a id="edit_alamat" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th>
                                        <a id="padamAlamat" class="btn btn-danger btn-block">Padam</a>
                                    </th>
                                </tr>
                            @endif
                        </table>

                        <a id="daftar_alamat" class="btn btn-primary btn-block">Daftar Alamat</a>
                        <button id="closeAlamat" class="btn btn-danger">Close</button>
                        <br><br>
                        @if ($alamat == true)
                            <div class="col-md-12" id="appearEditAlamat" style="display: none">
                                <form action="{{ route('updateAlamat', $alamat->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th scope="col">Jenis Alamat</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Poskod</th>
                                            <th scope="col">Bandar</th>
                                            <th scope="col">Negeri</th>
                                            <th scope="col">Kemaskini</th>
                                            <th scope="col">Batal</th>
                                        </tr>
                                        <tr>
                                            <input type="hidden" name="noAhli" value="{{ $alamat->noAhli }}">
                                            <input type="hidden" name="noKPBaru" value="{{ $alamat->noKPBaru }}">
                                            <th scope="row">
                                                <select name="jenisAlamat" class="form-select">
                                                    <option value="{{ $alamat->jenisAlamat }}">
                                                        {{ $alamat->jenisAlamat }}
                                                    </option>
                                                    <option value="Kediaman">Kediaman</option>
                                                    <option value="Pejabat">Pejabat</option>
                                                    <option value="ReturnR">Return-R</option>
                                                    <option value="ReturnP">Return-P</option>
                                                </select>
                                            </th>
                                            <th>
                                                <textarea type="text" name="alamat" class="form-control" rows="3" style="resize: none;">{{ $alamat->alamat }}</textarea>
                                            </th>
                                            <th>
                                                <input type="text" name="poskod" class="form-control"
                                                    value="{{ $alamat->poskod }}">
                                            </th>
                                            <th>
                                                <input type="text" name="bandar" class="form-control"
                                                    value="{{ $alamat->bandar }}">
                                            </th>
                                            <th>
                                                <select name="negeri" class="form-select">
                                                    <option value="{{ $alamat->negeri }}">{{ $alamat->negeri }}
                                                    </option>
                                                    <option value="Perlis">Perlis</option>
                                                    <option value="Kedah">Kedah</option>
                                                    <option value="Pulau Pinang">Pulau Pinang</option>
                                                    <option value="Perak">Perak</option>
                                                    <option value="Kelantan">Kelantan</option>
                                                    <option value="Terengganu">Terengganu</option>
                                                    <option value="Pahang">Pahang</option>
                                                    <option value="Melaka">Melaka</option>
                                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                    <option value="Selangor">Selangor</option>
                                                    <option value="Johor">Johor</option>
                                                    <option value="Sarawak">Sarawak</option>
                                                    <option value="Sabah">Sabah</option>
                                                    <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan
                                                        Kuala Lumpur</option>
                                                    <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan
                                                        Putrajaya</option>
                                                    <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan
                                                        Labuan</option>
                                                </select>
                                            </th>
                                            <th>
                                                <button class="btn btn-success btn-block"
                                                    type="submit">Kemaskini</button>
                                            </th>
                                            <th>
                                                <a id="closeEditAlamat" class="btn btn-danger btn-block">Batal</a>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        @endif
                        <br><br>
                        @if ($alamat == false)
                            <div class="col-md-6" id="appearDaftarAlamat" style="display: none">
                                <form action="{{ route('daftarAlamat', $ahli->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <input type="hidden" name="noAhli" value="{{ $ahli->noAhli }}">
                                            <th style="width: 20%">
                                                <label for="alamat">Alamat</label>
                                            </th>
                                            <td>
                                                <textarea type="text" name="alamat" class="form-control" rows="3" style="resize: none"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="poskod">Poskod</label>
                                            </th>
                                            <td>
                                                <input type="text" name="poskod" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="bandar">Bandar</label>
                                            </th>
                                            <td>
                                                <input type="text" name="bandar" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="negeri">Negeri</label>
                                            </th>
                                            <td>
                                                <select name="negeri" class="form-select">
                                                    <option value="">Pilih</option>
                                                    <option value="Perlis">Perlis</option>
                                                    <option value="Kedah">Kedah</option>
                                                    <option value="Pulau Pinang">Pulau Pinang</option>
                                                    <option value="Perak">Perak</option>
                                                    <option value="Kelantan">Kelantan</option>
                                                    <option value="Terengganu">Terengganu</option>
                                                    <option value="Pahang">Pahang</option>
                                                    <option value="Melaka">Melaka</option>
                                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                    <option value="Selangor">Selangor</option>
                                                    <option value="Johor">Johor</option>
                                                    <option value="Sarawak">Sarawak</option>
                                                    <option value="Sabah">Sabah</option>
                                                    <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan
                                                        Kuala Lumpur</option>
                                                    <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan
                                                        Putrajaya</option>
                                                    <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan
                                                        Labuan
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="jenisAlamat">Jenis Alamat</label>
                                            </th>
                                            <td>
                                                <select name="jenisAlamat" class="form-select">
                                                    <option value="">Pilih</option>
                                                    <option value="Kediaman">Kediaman</option>
                                                    <option value="Pejabat">Pejabat</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <button class="btn btn-success btn-block" type="submit">Submit</button>
                                    <br><br>
                                </form>
                                <button id="closeDaftarAlamat" class="btn btn-danger">Close</button>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-md-8" id="appearPejabat" style="display: none">
                        <h4>Maklumat Pejabat</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Kod</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>

                            </tr>
                                @foreach ($pejabat as $info)
                                    <tr>
                                        <th scope="row">{{ $info->kod_jabatan }}</th>
                                        <th>{{ $info->nama_jabatan }}</th>
                                        <th>{{ $info->alamat }} , {{ $info->poskod }} ,
                                        {{ $info->daerah }} , {{ $info->negeri }} .</th>
                                    </tr>
                                @endforeach

                        </table>
                        <br>
                        <h4>Maklumat Pembayar Gaji</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Kod</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>

                            </tr>
                            @foreach ($pembayarGaji as $info)
                                <tr>
                                    <th scope="row">{{ $info->kod_jabatan }}</th>
                                    <th>{{ $info->nama_jabatan }}</th>
                                    <th>{{ $info->alamat }} , {{ $info->poskod }} ,
                                        {{ $info->daerah }} , {{ $info->negeri }} .</th>
                                </tr>
                            @endforeach
                        </table>
                        <button id="closePejabat" class="btn btn-danger">Close</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-md-6" id="appearPerhubungan" style="display: none">
                        <h4>Maklumat Perhubungan</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Jenis Maklumat Perhubungan</th>
                                <th scope="col">Maklumat Perhubungan</th>
                                <th scope="col">Kemaskini</th>
                                <th scope="col">Padam</th>
                            </tr>
                            <tr>
                                <th scope="row">No Tel Rumah</th>
                                <th>{{ $noTelefon->telRumah }}</th>
                                <th> <a id="edit_telR" class="btn btn-success btn-block">Kemaskini</a></th>
                                <th><a id="padamTelR" class="btn btn-danger btn-block">Padam</a></th>
                            </tr>
                            <tr>
                                <th scope="row">No Tel Pejabat</th>
                                <th>{{ $noTelefon->telPejabat }}</th>
                                <th> <a id="edit_telP" class="btn btn-success btn-block">Kemaskini</a></th>
                                <th><a id="padamTelP" class="btn btn-danger btn-block">Padam</a></th>
                            </tr>
                            <tr>
                                <th scope="row">No Tel Bimbit</th>
                                <th>{{ $noTelefon->telHP }}</th>
                                <th> <a id="edit_telHP" class="btn btn-success btn-block">Kemaskini</a></th>
                                <th><a id="padamTelHP" class="btn btn-danger btn-block">Padam</a></th>
                            </tr>
                            <tr>
                                <th scope="row">Faks</th>
                                <th>{{ $noTelefon->faks }}</th>
                                <th> <a id="edit_faks" class="btn btn-success btn-block">Kemaskini</a></th>
                                <th><a id="padamFaks" class="btn btn-danger btn-block">Padam</a></th>
                            </tr>
                            <tr>
                                <th scope="row">E-mail</th>
                                <th>{{ $noTelefon->email }}</th>
                                <th> <a id="edit_email" class="btn btn-success btn-block">Kemaskini</a></th>
                                <th><a id="padamEmail" class="btn btn-danger btn-block">Padam</a></th>
                            </tr>
                        </table>

                        <button id="closePerhubungan" class="btn btn-danger">Close</button>

                        <br><br>

                        <div class="col-md-12" id="appearEditTelR" style="display: none">
                            <form action="{{ route('updateTelR', $noTelefon->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Maklumat Perhubungan</th>
                                        <th scope="col">Maklumat Perhubungan</th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">No Tel Rumah</th>
                                        <th>
                                            <input type="text" name="telRumah" value="{{ $noTelefon->telRumah }}" class="form-control">
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeEditTelR" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <br>
                        <div class="col-md-12" id="appearEditTelP" style="display: none">
                            <form action="{{ route('updateTelP', $noTelefon->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Maklumat Perhubungan</th>
                                        <th scope="col">Maklumat Perhubungan</th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">No Tel Pejabat</th>
                                        <th>
                                            <input type="text" name="telPejabat" value="{{ $noTelefon->telPejabat }}" class="form-control">
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeEditTelP" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <br>
                        <div class="col-md-12" id="appearEditTelHP" style="display: none">
                            <form action="{{ route('updateTelHP', $noTelefon->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Maklumat Perhubungan</th>
                                        <th scope="col">Maklumat Perhubungan</th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">No Tel Bimbit</th>
                                        <th>
                                            <input type="text" name="telHP" value="{{ $noTelefon->telHP }}" class="form-control">
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeEditTelHP" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <br>
                        <div class="col-md-12" id="appearEditFaks" style="display: none">
                            <form action="{{ route('updatefaks', $noTelefon->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Maklumat Perhubungan</th>
                                        <th scope="col">Maklumat Perhubungan</th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Faks</th>
                                        <th>
                                            <input type="text" name="faks" value="{{ $noTelefon->faks }}" class="form-control">
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeEditFaks" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <br>
                        <div class="col-md-12" id="appearEditEmail" style="display: none">
                            <form action="{{ route('updateEmail', $noTelefon->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Maklumat Perhubungan</th>
                                        <th scope="col">Maklumat Perhubungan</th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <th>
                                            <input type="text" name="email" value="{{ $noTelefon->email }}" class="form-control">
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeEditEmail" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-md-12" id="appearBank" style="display: none">
                        <h4>Maklumat Akaun No Bank</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Jenis Bank</th>
                                <th scope="col">No Akaun</th>
                                <th scope="col">Dicipta Oleh</th>
                                <th scope="col">Dicipta pada</th>
                                <th scope="col">Dikemaskini oleh</th>
                                <th scope="col">Dikemaskini pada</th>
                                <th scope="col">Akaun Bank Utama</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Kemaskini</th>
                                <th scope="col">Padam</th>
                            </tr>
                            @if ($bank == true)
                                <tr>
                                    <th scope="row">{{ $bank->jenisBank }}</th>
                                    <th>{{ $bank->noAkaunBank }}</th>
                                    <th></th>
                                    <th>{{ $bank->created_at }}</th>
                                    <th></th>
                                    <th>{{ $bank->updated_at }}</th>
                                    <th></th>
                                    <th>
                                        <a href="#">Set Akaun No Utama</a>
                                    </th>
                                    <th>
                                        <a href="#">Bukan Akaun No Utama</a>
                                    </th>
                                    <th><a id="edit_bank" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th>
                                        <a id="padamBank" class="btn btn-danger btn-block">Padam</a>
                                    </th>
                                </tr>
                            @endif
                        </table>
                        <button id="daftarBank" class="btn btn-primary">Daftar Akaun No</button>
                        <button id="closeBank" class="btn btn-danger">Close</button>
                    </div>
                    <br>
                    @if ($bank == true)
                        <div class="col-md-12" id="appearEditBank" style="display: none">
                            <form action="{{ route('updateBank', $ahli->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Bank</th>
                                        <th scope="col">No Akaun</th>
                                        <th scope="col">Dicipta Oleh</th>
                                        <th scope="col">Dicipta pada</th>
                                        <th scope="col">Dikemaskini oleh</th>
                                        <th scope="col">Dikemaskini pada</th>
                                        <th scope="col">Akaun Bank Utama</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="noAhli" value="{{ $bank->noAhli }}">
                                        <th scope="row">
                                            <select name="jenisBank" class="form-select">
                                                <option value="{{ $bank->jenisBank }}">{{ $bank->jenisBank }}
                                                </option>
                                                <option value="BANK ISLAM">Bank Islam</option>
                                                <option value="AGRO BANK">Agro Bank</option>
                                                <option value="MAYBANK">Maybank</option>
                                                <option value="RHB BANK">RHB Bank</option>
                                                <option value="CIMB BANK">CIMB Bank</option>
                                                <option value="AM BANK">Am Bank</option>
                                                <option value="BANK SIMPANAN NASIONAL">Bank Simpanan Nasional</option>
                                                <option value="BANK RAKYAT">Bank Rakyat</option>
                                                <option value="BANK MUAMALAT">Bank Muamalat</option>
                                                <option value="PUBLIC BANK">Public Bank</option>
                                                <option value="ALLIANCE BANK">Alliance Bank</option>
                                                <option value="STANDARD CHARTERED BANK">Standard Chartered Bank</option>
                                                <option value="EON BANK">EON Bank</option>
                                                <option value="HONG LEONG BANK">Hong Leong Bank</option>
                                                <option value="HSBC BANK">HSBC Bank</option>
                                                <option value="AFFIN BANK">Affin Bank</option>
                                                <option value="CITY BANK">City Bank</option>
                                                <option value="UNITED OVERSEAS BANK">United Overseas Bank</option>
                                                <option value="OCBC BANK">OCBC Bank</option>
                                                <option value="AL RAJHI BANK">Al Rajhi Bank</option>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="text" name="noAkaunBank" class="form-control" value="{{ $bank->noAkaunBank }}">
                                        </th>
                                        <th></th>
                                        <th>{{ $bank->created_at }}</th>
                                        <th></th>
                                        <th>{{ $bank->updated_at }}</th>
                                        <th></th>
                                        <th>
                                            <a href="#">Set Akaun No Utama</a>
                                        </th>
                                        <th>
                                            <a href="#">Bukan Akaun No Utama</a>
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeEditBank" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    @endif
                    <br>
                    @if ($bank == false)
                        <div class="col-md-8" id="appearDaftarBank" style="display: none">
                            <form action="{{ route('daftarBank', $ahli->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Bank</th>
                                        <th scope="col">No Akaun</th>
                                        <th scope="col">Daftar</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="noAhli" value="{{ $ahli->noAhli }}">
                                        <th scope="row">
                                            <select name="jenisBank" class="form-select">
                                                <option value="">Pilih</option>
                                                <option value="BANK ISLAM">Bank Islam</option>
                                                <option value="AGRO BANK">Agro Bank</option>
                                                <option value="MAYBANK">Maybank</option>
                                                <option value="RHB BANK">RHB Bank</option>
                                                <option value="CIMB BANK">CIMB Bank</option>
                                                <option value="AM BANK">Am Bank</option>
                                                <option value="BANK SIMPANAN NASIONAL">Bank Simpanan Nasional</option>
                                                <option value="BANK RAKYAT">Bank Rakyat</option>
                                                <option value="BANK MUAMALAT">Bank Muamalat</option>
                                                <option value="PUBLIC BANK">Public Bank</option>
                                                <option value="ALLIANCE BANK">Alliance Bank</option>
                                                <option value="STANDARD CHARTERED BANK">Standard Chartered Bank</option>
                                                <option value="EON BANK">EON Bank</option>
                                                <option value="HONG LEONG BANK">Hong Leong Bank</option>
                                                <option value="HSBC BANK">HSBC Bank</option>
                                                <option value="AFFIN BANK">Affin Bank</option>
                                                <option value="CITY BANK">City Bank</option>
                                                <option value="UNITED OVERSEAS BANK">United Overseas Bank</option>
                                                <option value="OCBC BANK">OCBC Bank</option>
                                                <option value="AL RAJHI BANK">Al Rajhi Bank</option>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="text" name="noAkaunBank" class="form-control">
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Daftar</button>
                                        </th>
                                        <th>
                                            <a id="closeDaftarBank" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <div class="col-md-12" id="appearWaris" style="display: none">
                        <h4>Maklumat Tanggungan Waris</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Hubungan</th>
                                <th scope="col">Pewaris</th>
                                <th scope="col">Penerima Wasiat</th>
                                <th scope="col">Pembahagian (%)</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No K/P Baru</th>
                                <th scope="col">No K/P Lama</th>
                                <th scope="col">Jantina</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Kemaskini</th>
                                <th scope="col">Padam</th>
                            </tr>
                            @if ($waris == true)
                            <tr>
                                <th scope="row">{{$waris->jenisHubungan}}</th>
                                <th>{{$waris->pewaris}}</th>
                                <th>{{$waris->pemegangWasiat}}</th>
                                <th>{{$waris->pembahagian}}</th>
                                <th>{{$waris->nama}}</th>
                                <th>{{$waris->noKP}}</th>
                                <th>{{$waris->noKPlama}}</th>
                                <th>{{$waris->jantina}}</th>
                                <th></th>
                                <th><a id="edit_waris" class="btn btn-success btn-block">Kemaskini</a></th>
                                <th><a id="padamWaris" class="btn btn-danger btn-block">Padam</a></th>
                            </tr>
                            @endif
                        </table>
                        <button id="daftarWaris" class="btn btn-primary">Daftar Tanggungan Waris</button>
                        <button id="closeWaris" class="btn btn-danger">Close</button>
                    </div>

                    <br>

                    @if ($waris == true)
                    <div class="col-md-12" id="appearEditWaris" style="display: none">
                        <form action="{{ route('updateWaris', $ahli->noKPBaru) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h4>Carian</h4>
                            <table>
                                <input type="hidden" name="noAhli" value="{{ $ahli->noAhli }}">
                                <tr>
                                    <th>Carian Individu</th>
                                    <td>
                                        <input type="text" name="cariIndi" class="form-control" value="{{$waris->cariIndi}}">
                                    </td>
                                    <td>
                                        <a href="{{ route('daftarIndividu') }}" class="btn btn-primary">Daftar Individu</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jenis Carian</th>
                                    <td>
                                        <select name="jenisCariIndi" class="form-select">
                                            <option value="{{$waris->jenisCariIndi}}">{{$waris->jenisCariIndi}}</option>
                                            <option value="No Ahli">No Ahli</option>
                                            <option value="No KP">No KP</option>
                                            <option value="No KP Lama">No KP Lama</option>
                                            <option value="Nama">Nama</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <button class="btn btn-secondary btn-block">Cari</button>
                                    </th>
                                </tr>
                            </table>

                            <br>

                            <table style="width:30%">
                                <tr>
                                    <th style="width: 40%">Hubungan</th>
                                    <td>
                                        <select name="jenisHubungan" class="form-select">
                                            <option value="{{$waris->jenisHubungan}}">{{$waris->jenisHubungan}}</option>
                                            <option value="SUAMI">Suami</option>
                                            <option value="ISTERI">Isteri</option>
                                            <option value="IBU">Ibu</option>
                                            <option value="BAPA">Bapa</option>
                                            <option value="ABANG">Abang</option>
                                            <option value="KAKAK">Kakak</option>
                                            <option value="ADIK">Adik</option>
                                            <option value="ANAK">Anak</option>
                                            <option value="BAPA SAUDARA">Bapa Saudara</option>
                                            <option value="IBU SAUDARA">Ibu Saudara</option>
                                            <option value="ANAK SAUDARA">Anak Saudara</option>
                                            <option value="SEPUPU">Sepupu</option>
                                            <option value="CUCU">Cucu</option>
                                            <option value="ABANG IPAR">Abang Ipar</option>
                                            <option value="KAKAK IPAR">Kakak Ipar</option>
                                            <option value="ADIK IPAR">Adik Ipar</option>
                                            <option value="TUNANG">Tunang</option>
                                            <option value="WAKIL WARITH">Wakil Warith</option>
                                            <option value="SAHABAT QARIB">Sahabat Qarib</option>
                                            <option value="LAIN-LAIN">Lain-lain</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 30%">
                                <tr>
                                    <th style="width: 40%">
                                        <label>Pewaris</label>
                                    </th>
                                    <td>
                                        <label><input type="radio" name="pewaris" value="Ya" class="form-check-input" <?php if ($waris->pewaris == "Ya") echo "checked" ?>>Ya</label>
                                    </td>
                                    <td>
                                        <label><input type="radio" name="pewaris" value="Tidak" class="form-check-input" <?php if ($waris->pewaris == "Tidak") echo "checked" ?>>Tidak</label>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 30%">
                                <tr>
                                    <th style="width: 40%">
                                        <label>Pemegang Wasiat</label>
                                    </th>
                                    <td>
                                        <label><input type="radio" name="pemegangWasiat" value="Ya" class="form-check-input" <?php if ($waris->pemegangWasiat == "Ya") echo "checked" ?>>Ya</label>
                                    </td>
                                    <td>
                                        <label><input type="radio" name="pemegangWasiat" value="Tidak" class="form-check-input" <?php if ($waris->pemegangWasiat == "Tidak") echo "checked" ?>>Tidak</label>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 30%">
                                <tr>
                                    <th style="width: 40%">Pembahagian (%)</th>
                                    <td>
                                        <input type="text" name="pembahagian" class="form-control" value="{{$waris->pembahagian }}">
                                    </td>
                                </tr>
                            </table>
                            
                            <br>
                            
                            <button type="submit" class="btn btn-primary btn-block">Kemaskini Tanggungan Waris</button>
                        </form>
                        <br>
                        <button id="closeEditWaris" class="btn btn-danger">Close</button>
                    </div>
                    @endif

                    <br>

                    @if ($waris == false)
                    <div class="col-md-12" id="appearDaftarWaris" style="display: none">
                        <form action="{{ route('daftarWaris', $ahli->noKPBaru) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h4>Carian</h4>
                            <table>
                                <input type="hidden" name="noAhli" value="{{ $ahli->noAhli }}">
                                <tr>
                                    <th>Carian Individu</th>
                                    <td>
                                        <input type="text" name="cariIndi" class="form-control">
                                    </td>
                                    <td>
                                        <a href="{{ route('daftarIndividu') }}" class="btn btn-primary">Daftar
                                            Individu</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jenis Carian</th>
                                    <td>
                                        <select name="jenisCariIndi" class="form-select">
                                            <option value="Pilih satu">Pilih satu</option>
                                            <option value="No Ahli">No Ahli</option>
                                            <option value="No KP">No KP</option>
                                            <option value="No KP Lama">No KP Lama</option>
                                            <option value="Nama">Nama</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <button class="btn btn-secondary btn-block">Cari</button>
                                    </th>
                                </tr>
                            </table>

                            <br>

                            <table style="width:30%">
                                <tr>
                                    <th style="width: 40%">Hubungan</th>
                                    <td>
                                        <select name="jenisHubungan" class="form-select">
                                            <option value="Pilih satu">Pilih satu</option>
                                            <option value="SUAMI">Suami</option>
                                            <option value="ISTERI">Isteri</option>
                                            <option value="IBU">Ibu</option>
                                            <option value="BAPA">Bapa</option>
                                            <option value="ABANG">Abang</option>
                                            <option value="KAKAK">Kakak</option>
                                            <option value="ADIK">Adik</option>
                                            <option value="ANAK">Anak</option>
                                            <option value="BAPA SAUDARA">Bapa Saudara</option>
                                            <option value="IBU SAUDARA">Ibu Saudara</option>
                                            <option value="ANAK SAUDARA">Anak Saudara</option>
                                            <option value="SEPUPU">Sepupu</option>
                                            <option value="CUCU">Cucu</option>
                                            <option value="ABANG IPAR">Abang Ipar</option>
                                            <option value="KAKAK IPAR">Kakak Ipar</option>
                                            <option value="ADIK IPAR">Adik Ipar</option>
                                            <option value="TUNANG">Tunang</option>
                                            <option value="WAKIL WARITH">Wakil Warith</option>
                                            <option value="SAHABAT QARIB">Sahabat Qarib</option>
                                            <option value="LAIN-LAIN">Lain-lain</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 30%">
                                <tr>
                                    <th style="width: 40%">
                                        <label>Pewaris</label>
                                    </th>
                                    <td>
                                        <label><input type="radio" name="pewaris" value="Ya" class="form-check-input">Ya</label>
                                    </td>
                                    <td>
                                        <label><input type="radio" name="pewaris" value="Tidak" class="form-check-input">Tidak</label>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 30%">
                                <tr>
                                    <th style="width: 40%">
                                        <label>Pemegang Wasiat</label>
                                    </th>
                                    <td>
                                        <label><input type="radio" name="pemegangWasiat" value="Ya" class="form-check-input">Ya</label>
                                    </td>
                                    <td>
                                        <label><input type="radio" name="pemegangWasiat" value="Tidak" class="form-check-input">Tidak</label>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 30%">
                                <tr>
                                    <th style="width: 40%">Pembahagian (%)</th>
                                    <td>
                                        <input type="text" name="pembahagian" class="form-control">
                                    </td>
                                </tr>
                            </table>
                            
                            <br>
                            
                            <button type="submit" class="btn btn-secondary btn-block">Daftar Tanggungan Waris</button>
                        </form>
                        <br>
                        <button id="closeDaftarWaris" class="btn btn-danger">Close</button>
                    </div>
                    @endif
                </div>

                <div class="card-body">
                    <div class="col-md-12" id="appearCaruman" style="display: none">
                        <h4>Maklumat Caruman</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Transaksi</th>
                                <th scope="col">Kod</th>
                                <th scope="col">Keterangan Caruman</th>
                                <th scope="col">Caruman Bulanan</th>
                                <th scope="col">Tarikh Mula</th>
                                <th scope="col">Caruman Bulanan Baru</th>
                                <th scope="col">Tarikh Berkuatkuasa</th>
                                <th scope="col">Baki Semasa</th>
                                <th scope="col">Kemaskini</th>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><a href="" class="btn btn-success btn-block">Kemaskini</a></th>
                            </tr>
                        </table>
                        <button id="closeCaruman" class="btn btn-danger">Close</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-md-12" id="appearPembiayaan" style="display: none">
                        <div class="table-responsive">
                            <h4>Maklumat Pembiayaan</h4>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Transaksi</th>
                                    <th scope="col">No Rujukan</th>
                                    <th scope="col">No Anggota</th>
                                    <th scope="col">Nama Pemohon</th>
                                    <th scope="col">Kod</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Jumlah Mohon</th>
                                    <th scope="col">Jumlah Biaya</th>
                                    <th scope="col">Jumlah Untung</th>
                                    <th scope="col">Tempoh</th>
                                    <th scope="col">Ansuran</th>
                                    <th scope="col">Baki Pembiayaan</th>
                                    <th scope="col">Tarikh Mula</th>
                                    <th scope="col">Tarikh Akhir</th>
                                    <th scope="col">Tarikh Lulus</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Cipta Akaun</th>
                                    <th scope="col">Dicipta Oleh</th>
                                    <th scope="col">Dicipta Pada</th>
                                    <th scope="col">Dikemaskini Oleh</th>
                                    <th scope="col">Dikemaskini Pada</th>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <h4>Maklumat Sebagai Penjamin</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">No Anggota</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Rujukan</th>
                                <th scope="col">No Anggota Peminjam</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Kod</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jumlah Mohon</th>
                                <th scope="col">Jumlah Biaya</th>
                                <th scope="col">Jumlah Untung</th>
                                <th scope="col">Tempoh (Bulan)</th>
                                <th scope="col">Baki Pembiayaan</th>
                                <th scope="col">Tarikh Mula</th>
                                <th scope="col">Tarikh Akhir</th>
                                <th scope="col">Status</th>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </table>
                        <button id="closePembiayaan" class="btn btn-danger">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Script pop-up -->
    <script type="text/javascript">
        $('#padamWaris').on('click', function() {
                console.log("btn click");
                Swal.fire({
                    title: 'Anda pasti ingin memadam data ini?',
                    text: "Data yang dipadam tidak akan dapat dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Padam'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel) {
    
                    } else {
                        Swal.fire(
                            'Telah dipadam!',
                            'Maklumat Tanggungan Waris anda telah dipadam.',
                            'success'
                        )
                        @if ($waris == true)
                            window.location =
                                '{{ route('padamWarisAhli', $waris->noKPBaru) }}';
                        @endif
                    }
    
                })
    
            })

            $('#padamBank').on('click', function() {
                console.log("btn click");
                Swal.fire({
                    title: 'Anda pasti ingin memadam data ini?',
                    text: "Data yang dipadam tidak akan dapat dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Padam'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel) {
    
                    } else {
                        Swal.fire(
                            'Telah dipadam!',
                            'Maklumat Bank anda telah dipadamkan.',
                            'success'
                        )
                        @if ($bank == true)
                            window.location =
                                '{{route('padamBankAhli', $bank->noKPBaru) }}';
                        @endif
                    }
    
                })
    
            })

            $('#padamEmail').on('click', function() {
                console.log("btn click");
                Swal.fire({
                    title: 'Anda pasti ingin memadam data ini?',
                    text: "Data yang dipadam tidak akan dapat dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Padam'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel) {
    
                    } else {
                        Swal.fire(
                            'Telah dipadam!',
                            'Email anda telah dipadamkan.',
                            'success'
                        )
                        @if ($noTelefon == true)
                            window.location =
                                '{{ route('padamEmailAhli', $noTelefon->noKPBaru) }}';
                        @endif
                    }
    
                })
    
            })

            $('#padamFaks').on('click', function() {
                console.log("btn click");
                Swal.fire({
                    title: 'Anda pasti ingin memadam data ini?',
                    text: "Data yang dipadam tidak akan dapat dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Padam'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel) {
    
                    } else {
                        Swal.fire(
                            'Telah dipadam!',
                            'Faks anda telah dipadamkan.',
                            'success'
                        )
                        @if ($noTelefon == true)
                            window.location =
                                '{{ route('padamFaksAhli', $noTelefon->noKPBaru) }}';
                        @endif
                    }
    
                })
    
            })

            $('#padamTelHP').on('click', function() {
                console.log("btn click");
                Swal.fire({
                    title: 'Anda pasti ingin memadam data ini?',
                    text: "Data yang dipadam tidak akan dapat dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Padam'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel) {
    
                    } else {
                        Swal.fire(
                            'Telah dipadam!',
                            'No Telefon Bimbit anda telah dipadamkan.',
                            'success'
                        )
                        @if ($noTelefon == true)
                            window.location =
                                '{{ route('padamTelHPAhli', $noTelefon->noKPBaru) }}';
                        @endif
                    }
    
                })
    
            })

             $('#padamTelP').on('click', function() {
                console.log("btn click");
                Swal.fire({
                    title: 'Anda pasti ingin memadam data ini?',
                    text: "Data yang dipadam tidak akan dapat dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Padam'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel) {
    
                    } else {
                        Swal.fire(
                            'Telah dipadam!',
                            'No Telefon Pejabat anda telah dipadamkan.',
                            'success'
                        )
                        @if ($noTelefon == true)
                            window.location =
                                '{{ route('padamTelPAhli', $noTelefon->noKPBaru) }}';
                        @endif
                    }
    
                })
    
            })

             $('#padamTelR').on('click', function() {
                console.log("btn click");
                Swal.fire({
                    title: 'Anda pasti ingin memadam data ini?',
                    text: "Data yang dipadam tidak akan dapat dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Padam'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel) {
    
                    } else {
                        Swal.fire(
                            'Telah dipadam!',
                            'No Telefon Rumah anda telah dipadamkan.',
                            'success'
                        )
                        @if ($noTelefon == true)
                            window.location =
                                '{{ route('padamTelRAhli', $noTelefon->noKPBaru) }}';
                        @endif
                    }
    
                })
    
            })

            $('#padamAlamat').on('click', function() {
                console.log("btn click");
                Swal.fire({
                    title: 'Anda pasti ingin memadam data ini?',
                    text: "Data yang dipadam tidak akan dapat dikembalikan!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Padam'
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.cancel) {
    
                    } else {
                        Swal.fire(
                            'Telah dipadam!',
                            'Alamat anda telah dipadamkan.',
                            'success'
                        )
                        @if ($alamat == true)
                            window.location =
                                '{{ route('padamAlamat', $alamat->noKPBaru) }}';
                        @endif
                    }
    
                })
    
            })
        </script>

    <script type="text/javascript">
        $("#btn_alamat").click(
            function() {
                $("#appearAlamat").show();
            }
        );

        $("#btn_pejabat").click(
            function() {
                $("#appearPejabat").show();
            }
        );

        $("#btn_noTel").click(
            function() {
                $("#appearPerhubungan").show();
            }
        );

        $("#btn_akaun").click(
            function() {
                $("#appearBank").show();
            }
        );

        $("#btn_waris").click(
            function() {
                $("#appearWaris").show();
            }
        );

        $("#btn_caruman").click(
            function() {
                $("#appearCaruman").show();
            }
        );

        $("#btn_pembiayaan").click(
            function() {
                $("#appearPembiayaan").show();
            }
        );

        $("#edit_alamat").click(
            function() {
                $("#appearEditAlamat").show();
            }
        );

        $("#daftar_alamat").click(
            function() {
                $("#appearDaftarAlamat").show();
            }
        );

        $("#edit_telR").click(
            function() {
                $("#appearEditTelR").show();
            }
        );

        $("#edit_telP").click(
            function() {
                $("#appearEditTelP").show();
            }
        );

        $("#edit_telHP").click(
            function() {
                $("#appearEditTelHP").show();
            }
        );

        $("#edit_faks").click(
            function() {
                $("#appearEditFaks").show();
            }
        );

        $("#edit_email").click(
            function() {
                $("#appearEditEmail").show();
            }
        );

        $("#edit_bank").click(
            function() {
                $("#appearEditBank").show();
            }
        );

        $("#daftarBank").click(
            function() {
                $("#appearDaftarBank").show();
            }
        );

        $("#edit_waris").click(
            function() {
                $("#appearEditWaris").show();
            }
        );

        $("#daftarWaris").click(
            function() {
                $("#appearDaftarWaris").show();
            }
        );

        $("#closeAlamat").click(
            function() {
                $("#appearAlamat").hide();
            }
        );

        $("#closePejabat").click(
            function() {
                $("#appearPejabat").hide();
            }
        );

        $("#closePerhubungan").click(
            function() {
                $("#appearPerhubungan").hide();
            }
        );

        $("#closeBank").click(
            function() {
                $("#appearBank").hide();
            }
        );

        $("#closeWaris").click(
            function() {
                $("#appearWaris").hide();
            }
        );

        $("#closeCaruman").click(
            function() {
                $("#appearCaruman").hide();
            }
        );

        $("#closePembiayaan").click(
            function() {
                $("#appearPembiayaan").hide();
            }
        );

        $("#closeEditAlamat").click(
            function() {
                $("#appearEditAlamat").hide();
            }
        );

        $("#closeDaftarAlamat").click(
            function() {
                $("#appearDaftarAlamat").hide();
            }
        );

        $("#closeEditTelR").click(
            function() {
                $("#appearEditTelR").hide();
            }
        );

        $("#closeEditTelP").click(
            function() {
                $("#appearTelP").hide();
            }
        );

        $("#closeEditTelHP").click(
            function() {
                $("#appearEditTelHP").hide();
            }
        );

        $("#closeEditFaks").click(
            function() {
                $("#appearEditFaks").hide();
            }
        );

        $("#closeEditEmail").click(
            function() {
                $("#appearEditEmail").hide();
            }
        );

        $("#closeEditBank").click(
            function() {
                $("#appearEditBank").hide();
            }
        );

        $("#closeDaftarBank").click(
            function() {
                $("#appearDaftarBank").hide();
            }
        );

        $("#closeEditWaris").click(
            function() {
                $("#appearEditWaris").hide();
            }
        );

        $("#closeDaftarWaris").click(
            function() {
                $("#appearDaftarWaris").hide();
            }
        );
    </script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    </div>
</body>

@if (session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif
