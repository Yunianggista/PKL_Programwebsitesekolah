@extends('layouts.layoutAdmin')  

@section('content')


<section class="content-header">
      <h1>
        Data Tenaga Pendidik
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
          <a href="tambah_tenaga" class="btn btn-primary">Tambah</a> 
          </div>
            <!-- /.box-header -->
            <div class="box-body">
           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama </th>
                  <th>NUPTK</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat/Tanggal Lahit</th>
                  <th>NIP</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1; ?>
                  @foreach($data as $data)
                  <tr>
                    <td> {{ $count }} </td>
                    <td> {{ $data->nama}} </td>
                    <td> {{ $data->NUPTK}} </td>
                    @if($data->jk === '1')
                    <td> Laki-laki </td>
                    @else
                    <td> Perempuan </td>
                    @endif
                    <td> {{ $data->tempat }}/{{$data->tanggal}} </td>
                    <td> {{ $data->NIP }} </td>
                    <td> {{ $data->status }} </td>
                    <td>
              
                      <a href="edit_tenaga/{{ $data->id}}" class="btn btn-success">Edit</a>
                      <a href="hapus_tenaga/{{$data->id }}" onclick="return confirm ('Apakah Anda Yakin Menghapus Data Ini ?'); " class="btn btn-danger"> Hapus </a>
                      </td>
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