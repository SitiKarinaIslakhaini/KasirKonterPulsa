@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pelanggan </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/pelanggan/store')}}" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_pelanggan"> Nama </label>
                    <input type="text" class="form-control" name="nama_pelanggan"id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  
                  <label for="alamat_pelanggan" class="form-label">Alamat</label>
                  <div class="form-floating">
                    <textarea name="alamat_pelanggan" id="flotingTextArea" class="form-control" ></textarea>
                  </div>
                
                  <div class="form-group">
                    <label for="notelp_pelanggan">No Telp </label>
                    <input type="number" name="notelp_pelanggan" class="form-control" placeholder="+62">
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
           