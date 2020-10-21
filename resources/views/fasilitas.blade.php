@extends('layouts.nav')

@section('content')
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <h1 style="font-size: 36px"><center>Sarana</center></h1>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Jenis Sarana</th>
          <th>Letak</th>
          <th>Kepemilikan</th>
          <th>Jumlah</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
       @foreach($sarana as $index=>$s)
       <tr>
        <td>{{$index+1}}</td> 
        <td>{{$s->jenis}}</td>               
        <td>{{$s->letak}}</td>               
        <td>{{$s->kepemilikan}}</td>               
        <td>{{$s->jumlah}}</td>               
        <td>{{$s->status}}</td>
      </tr>
      @endforeach               

    </tbody>

  </table>
  <br>
  <h1 style="font-size: 36px"><center>Prasarana</center></h1>
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama  Prasarana</th>
        <th>Panjang</th>
        <th>Lebar</th>
        <th>Kepemilikan</th>
        <th>Status</th>
        <th>Presentase Kerusakan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($prasarana as $index=>$p)
      <tr>
        <td>{{$index+1}}</td>
        <td>{{$p->nama}}</td>
        <td>{{$p->panjang}}</td>
        <td>{{$p->lebar}}</td>
        <td>{{$p->kepemilikan}}</td>
        <td>{{$p->status}}</td>
        <td>{{$p->presentase}}</td>
      </tr>
      @endforeach

    </tbody>

  </table>
  <!-- ####################################################################################################### -->
  <div class="clear"></div>
</div>
</div>
@endsection