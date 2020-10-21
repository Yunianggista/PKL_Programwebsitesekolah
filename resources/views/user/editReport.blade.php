@extends('layouts.layoutAdmin')  

@section('content')
  <!-- Horizontal Form -->
          <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Pelanggaran Siswa</h3>
               @if(session()->has('message'))
              <div class="">
              Alert::message('Message', 'Optional Title');
              {{ session()->get('message') }}
             </div>
            @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{ url()->current()}}"class="form-horizontal">

              {{ csrf_field() }}

              
              <div class="box-body">
               
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Nama Pelanggaran</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->nama}}" class="form-control" placeholder="Masukkan Nama" name="name">
                    {!! $errors->first('name', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                
				        <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <input type="date" value="{{$data->tanggal}}" class="form-control"placeholder="Masukkan Tanggal" name="tanggal">
                    {!! $errors->first('tanggal', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Point</label>

                  <div class="col-sm-10">
                    <input type="number" value="{{$data->point}}" class="form-control"placeholder="Masukkan Point" name="point">
                    {!! $errors->first('point', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </section>
@stop