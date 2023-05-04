@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Kasir </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/kasir/store')}}" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" name="email"id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="text" class="form-control" name="password"id="exampleInputEmail1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="nama_kasir"> Nama </label>
                    <input type="text" class="form-control" name="nama_kasir"id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  
                  <label for="alamat_kasir" class="form-label">Alamat</label>
                  <div class="form-floating">
                    <textarea name="alamat_kasir" id="flotingTextArea" class="form-control" ></textarea>
                  </div>
                
                  <div class="form-group">
                    <label for="notelp_kasir">No Telp </label>
                    <input type="number" name="notelp_kasir" class="form-control" placeholder="+62">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              </div>
@endsection  
           