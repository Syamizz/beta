<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TCIS</title>
</head>
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Alert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('Inter XS') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ahli
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Maklumat Ahli</a></li>
                                <li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="#">Pendaftaran <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">Daftar Ahli</a></li>
                                        <li><a tabindex="-1" href="#">Yuran Pendaftaran</a></li>

                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Pemberhentian</a></li>
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
                                <li><a class="dropdown-item" href="{{ route('daftarIndividu') }}">Daftar Individu</a>
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
                                <li><a class="dropdown-item" href="{{ route('daftarSyarikat') }}">Daftar Syarikat</a>
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
                                <li><a class="dropdown-item" href="{{route('daftarKakitangan')}}">Daftar Kakitangan</a></li>
                                <li><a class="dropdown-item" href="{{route('maklumatStaff')}}">Maklumat Kakitangan</a></li>
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
    <!-- end of navbar -->


    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Ahli</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Maklumat Ahli</h4>
                    <form action="{{route('pengesahanAhli')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table style="width: 50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="statusAhli">Status Keanggotaan</label>
                                </th>
                                <td>
                                    <select name="statusAhli" class="form-select">
                                        <option value="Anggota Baharu">Anggota Baharu</option>
                                        <option value="Bekerja">Bekerja</option>
                                        <option value="Pesara">Pesara</option>
                                        <option value="Pesara (Bekerja Kontrak)">Pesara (Bekerja Kontrak)</option>
                                        <option value="BERHENTI">BERHENTI</option>
                                        <option value="BERHENTI KERANA BERSARA">BERHENTI KERANA BERSARA</option>
                                        <option value="BERHENTI KERANA KEMATIAN">BERHENTI KERANA KEMATIAN</option>
                                        <option value="BERHENTI SEBAB PERIBADI">BERHENTI SEBAB PERIBADI</option>
                                        <option value="DIBERHENTIKAN OLEH KOPERASI">DIBERHENTIKAN OLEH KOPERASI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noAhliTerkini">No Ahli Terkini</label>
                                </th>
                                <td>
                                    <input type="text" name="noAhliTerkini" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noAhli">No Ahli</label>
                                </th>
                                <td>
                                    <input type="text" name="noAhli" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhDaftar">Tarikh Daftar</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhDaftar" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="nama">Nama</label>
                                </th>
                                <td>
                                    <input type="text" name="nama" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noKPBaru">No KP Baru</label>
                                </th>
                                <td>
                                    <input type="text" name="noKPBaru" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noKPLama">No KP Lama/Tentera/Polis</label>
                                </th>
                                <td>
                                    <input type="text" name="noKPLama" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jantina">Jantina</label>
                                </th>
                                <td>
                                    <label><input type="radio" name="jantina" value="Lelaki" class="form-check-input">Lelaki</label>&nbsp;
                                    <label><input type="radio" name="jantina" value="Perempuan" class="form-check-input">Perempuan</label>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="bangsa">Bangsa</label>
                                </th>
                                <td>
                                    <select name="bangsa" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Melayu">Melayu</option>
                                        <option value="Cina">Cina</option>
                                        <option value="India">India</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="agama">Agama</label>
                                </th>
                                <td>
                                    <select name="agama" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Kristian">Kristian</option>
                                        <option value="Sikh">Sikh</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhLahir">Tarikh Lahir</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhLahir" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tempatLahir">Tempat Lahir</label>
                                </th>
                                <td>
                                    <input type="text" name="tempatLahir" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="caraPembayaran">Cara Pembayaran</label>
                                </th>
                                <td>
                                    <select name="caraPembayaran" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Sendiri">Sendiri</option>
                                        <option value="Bendahari/Majikan">Bendahari/Majikan</option>
                                        <option value="BPA">BPA</option>
                                        <option value="Arahan Bank">Arahan Bank</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Alamat</h4>
                        <table style="width: 50%">
                            <tr>
                                <th style="width: 30%">
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
                                        <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                        <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                                        <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
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
                        <br>
                        <H4>No Telefon</H4>
                        <table style="width: 50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="telRumah">Tel (R)</label>
                                </th>
                                <td>
                                    <input type="text" name="telRumah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="telPejabat">Tel (P)</label>
                                </th>
                                <td>
                                    <input type="text" name="telPejabat" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="telHP">Tel (HP)</label>
                                </th>
                                <td>
                                    <input type="text" name="telHP" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="faks">Faks</label>
                                </th>
                                <td>
                                    <input type="text" name="faks" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="email">Email</label>
                                </th>
                                <td>
                                    <input type="email" name="email" class="form-control">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Akaun</h4>
                        <table style="width: 50%">
                            <tr>
                                <th style="width:30%">
                                    <label for="noAkaunBank">No Akaun Bank</label>
                                </th>
                                <td>
                                    <input type="text" name="noAkaunBank" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jenisBank">Nama Bank</label>
                                </th>
                                <td>
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
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Pejabat</h4>
                        <table style="width: 50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="cariP">Carian</label>
                                </th>
                                <td colspan="2">
                                    <input type="text" name="cariP" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jenisCariP">Kategori</label>
                                </th>
                                <td>
                                    <select name="jenisCariP" class="form-select">
                                        <option value="Kod">Kod</option>
                                        <option value="Nama">Nama</option>
                                    </select>
                                </td>
                                <td>
                                    <a id="cariMaklumatPejabat" class="btn btn-secondary">Cari</a>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Pembayar Gaji</h4>
                        <table style="width:50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="cariPG">Carian</label>
                                </th>
                                <td colspan="2">
                                    <input type="text" name="cariPG" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jenisCariPG">Kategori</label>
                                </th>
                                <td>
                                    <select name="jenisCariPG" class="form-select">
                                        <option value="Kod">Kod</option>
                                        <option value="Nama">Nama</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-secondary">Cari</button>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Pekerjaan</h4>
                        <table style="width:50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="jawatan">Jawatan</label>
                                </th>
                                <td>
                                    <input type="text" name="jawatan" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhMulaKerja">Tarikh Mula Kerja</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhMulaKerja" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noGaji">No Gaji</label>
                                </th>
                                <td>
                                    <input type="text" name="noGaji" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="Gaji">Gaji (sebulan) RM</label>
                                </th>
                                <td>
                                    <input type="text" name="Gaji" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="potongan">Potongan Semasa RM</label>
                                </th>
                                <td>
                                    <input type="text" name="potongan" class="form-control">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Akta Perlindungan Data Peribadi</h4>
                        <table>
                            <tr>
                                <th>
                                    <label>Sila tanda kotak berkenaan.</label>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <label><input type="radio" name="perakuan" value="Ya, bersetuju untuk Koperasi memproses data peribadi" class="form-check-input">Ya, bersetuju untuk Koperasi memproses data peribadi</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><input type="radio" name="perakuan" value="Tidak, bersetuju untuk memproses data peribadi" class="form-check-input">Tidak, bersetuju untuk memproses data peribadi</label>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ route('home') }}"><button class="btn btn-danger">Batal</button></a> 
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        var btn = document.getElementById('cariMaklumatPejabat');
        btn.click(
            function() {
                var cariP = document.getElementByName('cariP').value;
                var jenisCariP = document.getElementByName('jenisCariP').value;
                window.location = "{{route('daftarAhli2',["cariP","jenisCariP"])}}";
            }
        );
    </script>


    <script src="{{ asset('public/js/app.js') }}" defer></script>
</body>
</html>
