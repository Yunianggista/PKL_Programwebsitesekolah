@extends('layouts.nav')

@section('content')
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <h1 style="font-size: 36px"><center>Struktur Organisasi Sekolah</center></h1>
    <div style="margin: auto; width: 60%;">
    </div>
    <div style="margin: auto; width: 80%;">
      <img src="{{ asset('images/struktur.jpg') }}" alt="">
    </div>
    <!-- ####################################################################################################### -->
    <div class="clear">
    <h1 style="font-size: 36px"><center>Daftar Pendidik dan Tenaga Kependidikan</center></h1>
      <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NUPTK</th>
                  <th>JK</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>NIP</th>
                  <th>Status Kepegawaian</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $index=>$d)
                  <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$d->nama}}</td>
                    <td>{{$d->NUPTK}}</td>
                    @if($d->JK === '1')
                    <td>Laki-Laki</td>
                    @else(
                    <td>Perempuan</td>
                    @endif
                    <td>{{$d->tempat}}</td>
                    <td>{{$d->tanggal}}</td>
                    <td>{{$d->NIP}}</td>
                    <td>{{$d->status}}</td>
                  </tr>
                  @endforeach
                </tbody>
               
              </table>
    </div>
  </div>
</div>
@endsection