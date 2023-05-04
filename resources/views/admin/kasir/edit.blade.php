@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Kasir</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kasir/{{$kasir->id}}/update" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" name="email"id="exampleInputEmail1" placeholder="Email"  value="{{$kasir->email}}">
                  </div>
                  <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="text" class="form-control" name="password"id="exampleInputEmail1" placeholder="Password"  value="{{$kasir->password}}">
                  </div>
                  <div class="form-group">
                    <label for="nama_kasir">Nama</label>
                    <input type="text" class="form-control" name="nama_kasir" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$kasir->nama_kasir}}">
                  </div>
                  
                  <label for="alamat_kasir" class="from-label">Alamat</label>
                  <div class="from-floating"> 
                    <textarea name="alamat_kasir" id="floatingTextArea" class="form-control">{{$kasir->alamat_kasir}}</textarea>
                  </div>
                  <div class="form-group">
                  </label for="notelp_kasir">No Telp</label>
                  <input type="number" name="notelp_kasir" class="form-control" placeholder ="+62" value="{{$kasir->notelp_kasir}}">
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
