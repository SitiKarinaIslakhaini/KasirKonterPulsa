@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/pembayaran/store')}}" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                <div class="form-group">
                    <label for="kasir_id"> Kasir </label>
                    <input type="text" class="form-control"  name="kasir_id"id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="pelanggan_id"> Pelanggan </label>
                    <input type="text" class="form-control"  name="pelanggan_id"id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="pulsa_id"> Pulsa </label>
                    <input type="text" class="form-control"  name="pulsa_id"id="exampleInputEmail1" placeholder="Pulsa">
                  </div>
                  
                  <div class="form-group">
                    <label for="tanggal"> Tanggal </label>
                    <input type="date" class="form-control"  name="tanggal"id="exampleInputEmail1" placeholder="Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="total"> Total </label>
                    <input type="number" class="form-control"  name="total"id="exampleInputEmail1" placeholder="Total">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
</div>
              </form>
            </div>
              </div>
@endsection  
           