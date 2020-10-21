@extends('layouts.layoutAdmin')  

@section('content')


<section class="content-header">
      <h1>
        Data Buku Tamu
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
            <!-- /.box-header -->
            <div class="box-body">
           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama </th>
                  <th>Email</th>
                  <th>Pesan</th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1; ?>
                  @foreach($data as $data)
                  <tr>
                    <td> {{ $count }} </td>
                    <td> {{ $data->nama}} </td>
                    <td> {{ $data->email}} </td>
                    <td> {{ $data->pesan}} </td>
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