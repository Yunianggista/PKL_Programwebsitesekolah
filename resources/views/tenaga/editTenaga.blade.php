@extends('layouts.layoutAdmin')  

@section('content')
  <!-- Horizontal Form -->
          <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Tenaga Pendidikan</h3>
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
                    <input type="text" class="form-control" placeholder="Masukkan Nama" value="{{$data->nama}}" name="name">
                    {!! $errors->first('name', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                           
				        <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">NUPTK</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->NUPTK}}" class="form-control"placeholder="Masukkan NUPTK" name="NUPTK">
                    {!! $errors->first('NUPTK', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="jk">
                    @if($data->jk ===1)
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                    @else
                    <option value="2">Perempuan</option>
                    <option value="1">Laki-laki</option>
                    @endif
                    </select>
                    {!! $errors->first('jk', '<strong class="text-danger">:message</strong>') !!}
                    </div>
                </div>
                
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Tempat</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->tempat}}" class="form-control"placeholder="Masukkan Tempat" name="tempat">
                    {!! $errors->first('tempat', '<strong class="text-danger">:message</strong>') !!}
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
                  <label for="text" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->NIP}}" class="form-control"placeholder="Masukkan NIP" name="NIP">
                    {!! $errors->first('NIP', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <input type="text" value="{{$data->status}}" class="form-control"placeholder="Masukkan Status" name="status">
                    {!! $errors->first('status', '<strong class="text-danger">:message</strong>') !!}
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