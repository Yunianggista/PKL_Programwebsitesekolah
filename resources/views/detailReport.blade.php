@extends('layouts.nav')

@section('content')
<div class="wrapper row4">
  <div id="container" style="min-height: 60vh" class="clear"> 
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelangaran</th>
                  <th>Tanggal</th>
                  <th>Point</th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1; ?>
                  @foreach($data as $da)
                  <tr>
                    <td> {{ $count }} </td>
                    <td> {{ $da->nama}} </td>
                    <td> {{ $da->tanggal}} </td>
                    <td> {{ $da->point}} </td>
                  </tr>
                  <?php $count++; ?>
                  @endforeach 

               
               
                </tbody>
               
              </table>
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
@endsection