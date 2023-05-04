@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pelanggan/{{$pelanggan->id}}/update" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="nama_pelanggan">Nama</label>
                    <input type="text" class="form-control" name="nama_pelanggan" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$pelanggan->nama_pelanggan}}">
                  </div>
                  
                  <label for="alamat_pelanggan" class="from-label">Alamat</label>
                  <div class="from-floating"> 
                    <textarea name="alamat_pelanggan" id="floatingTextArea" class="form-control">{{$pelanggan->alamat_pelanggan}}</textarea>
                  </div>
                  <div class="form-group">
                  </label for="notelp_pelanggan">No Telp</label>
                  <input type="number" name="notelp_pelanggan" class="form-control" placeholder ="+62" value="{{$pelanggan->notelp_pelanggan}}">
                  
</div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Update</button>
                  </div>
</div>
              </form>
            </div>
</div> 
@endsection
