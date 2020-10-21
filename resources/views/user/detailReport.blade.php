@extends('layouts.layoutAdmin')  

@section('content')


<section class="content-header">
      <h1>
        Data Pelanggaran {{$user->nama}}
      </h1>
      @if(session()->has('message'))
    <div class="">
    Alert::message('Message', 'Optional Title');
        {{ session()->get('message') }}
    </div>
@endif
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
          <div class="box-header">

          </div>
            <!-- /.box-header -->
            <div class="box-body">
           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelangaran</th>
                  <th>Tanggal</th>
                  <th>Point</th>
                  <th>Aksi</th>
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
                    <td><a href="/edit_report/{{ $da->id}}" class="btn btn-success">Edit</a>
                        <a href="/hapus_report/{{$da->id }}" onclick="return confirm ('Apakah Anda Yakin Menghapus Data Ini ?'); " class="btn btn-danger"> Hapus </a></td>
                  </tr>
                  <?php $count++; ?>
                  @endforeach 

               
               
                </tbody>
               
              </table>
            </div>  
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop