@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">Maklumat Individu</div>
        <div class="card-body" style="background-color: orange;">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>No KP</th>
                    <th>Jantina</th>
                    <th>Tarikh lahir</th>
                    <th>Tempat lahir</th>
                </tr>
                @foreach($individu as $info)
                <tr>
                    <td width="20%" style="border: 1px solid black;">{{$info->nama}}</td>
                    <td width="20%" style="border: 1px solid black;">{{$info->noKP}}</td>
                    <td width="20%" style="border: 1px solid black;">{{$info->jantina}}</td>
                    <td width="20%" style="border: 1px solid black;">{{$info->tarikh_lahir}}</td>
                    <td width="20%" style="border: 1px solid black;">{{$info->tempat_lahir}}</td>
                </tr>
                @endforeach
                <br>
            </table>
        </div>
    </div>
</div>

@endsection