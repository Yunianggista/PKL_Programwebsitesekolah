@extends('layouts.layoutAdmin')  

@section('content')
  <!-- Horizontal Form -->
          <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Sarana</h3>
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
                  <label for="text" class="col-sm-2 control-label">Jenis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukkan Jenis" name="jenis">
                    {!! $errors->first('jenis', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                           
				        <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Letak</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"placeholder="Masukkan Letak" name="letak">
                    {!! $errors->first('letak', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Kepemilikan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"placeholder="Masukkan Kepemilikan" name="kepemilikan">
                    {!! $errors->first('kepemilikan', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control"placeholder="Masukkan Tanggal" name="jumlah">
                    {!! $errors->first('jumlah', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"placeholder="Masukkan Status" name="status">
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