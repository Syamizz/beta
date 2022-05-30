<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Inter XS') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>
</head>

<body>

<div id="navbar">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inter XS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ahli
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Maklumat Ahli</a></li>
                            <li class="dropdown-submenu">
                                <a class="test" tabindex="-1" href="#">Pendaftaran <span class="caret"></span></a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Individu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Maklumat Individu</a></li>
                            <li><a class="dropdown-item" href="{{route('daftarIndividu')}}">Pendaftaran Individu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Syarikat
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Daftar Syarikat</a></li>
                            <li><a class="dropdown-item" href="#">Maklumat Syarikat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kakitangan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Daftar Kakitangan</a></li>
                            <li><a class="dropdown-item" href="#">Maklumat Kakitangan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            </div>
        </div>
    </nav>
</div>
    <!-- Scripts -->
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
</body>

</html>