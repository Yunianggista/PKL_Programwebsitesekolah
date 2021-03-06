@extends('layouts.layoutAdmin')  

@section('content')
  <!-- Horizontal Form -->
          <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Siswa</h3>
              @if(session()->has('message'))
              <div class="">
              Alert::message('Message', 'Optional Title');
              {{ session()->get('message') }}
             </div>
            @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{ url()->current() }}"class="form-horizontal">

              {{ csrf_field() }}

              
              <div class="box-body">
                
				        <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"placeholder="Masukkan Nama" name="name" value="{{$user->name}}"> {!! $errors-> first('nae', '<strong class="text-danger">:message</strong>')!!}
                  </div>
                </div>
				
					     <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"placeholder="Masukkan Email  " value="{{$user->email}}" name="email">
                    {!! $errors->first('email', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                
               <input type="submit" name="save" value="Update" class="btn btn-md btn-success">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </section>
@stop