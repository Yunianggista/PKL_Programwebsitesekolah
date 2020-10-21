@extends('layouts.nav')

@section('content')
<div class="wrapper row4">
  <div id="container" style="min-height: 60vh" class="clear"> 
  <h1 style="font-size: 36px"><center>Hubungi Kami</center></h1>
    <div style="margin: auto; width: 40%;">
   <form method="post" action="{{ url()->current()}}"class="form-horizontal">

              {{ csrf_field() }}

              
              <div class="box-body">
               
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="name">
                    {!! $errors->first('name', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                
				        <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"placeholder="Masukkan email" name="email">
                    {!! $errors->first('email', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
				 <div class="form-group row">
                            <label for="pesan" class="col-md-4 col-form-label text-md-right">Pesan</label>

                            <div class="col-md-6">
                                <textarea id="pesan" class="form-control" name="pesan"></textarea>  
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
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
@endsection