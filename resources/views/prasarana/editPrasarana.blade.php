@extends('layouts.layoutAdmin')  

@section('content')
  <!-- Horizontal Form -->
          <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Prasarana</h3>
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
                  <label for="text" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->nama}}" class="form-control" placeholder="Masukkan Nama" name="nama">
                    {!! $errors->first('nama', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                           
				        <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Panjang</label>

                  <div class="col-sm-10">
                    <input type="number" value="{{$data->panjang}}" class="form-control"placeholder="Masukkan Panjang" name="panjang">
                    {!! $errors->first('panjang', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="number" class="col-sm-2 control-label">Lebar</label>

                  <div class="col-sm-10">
                    <input type="number" value="{{$data->lebar}}" class="form-control"placeholder="Masukkan Lebar" name="lebar">
                    {!! $errors->first('lebar', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Kepemilikan</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->kepemilikan}}" class="form-control"placeholder="Masukkan Kepemilikan" name="kepemilikan">
                    {!! $errors->first('kepemilikan', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->status}}" class="form-control"placeholder="Masukkan Status" name="status">
                    {!! $errors->first('status', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                

                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Presentase Kerusakan</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->presentase}}" class="form-control"placeholder="Masukkan Presentase Kerusakan" name="presentase">
                    {!! $errors->first('presentase', '<strong class="text-danger">:message</strong>') !!}
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