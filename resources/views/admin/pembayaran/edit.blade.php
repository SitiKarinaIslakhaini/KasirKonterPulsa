@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Pembayaran</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pembayaran/{{$pembayaran->id}}/update" method="POST">
              {{csrf_field()}}
            <div class="card-body">

                <div class="form-group">
                    <label for="kasir_id">Kasir</label>
                    <input type="text" class="form-control" name="kasir_id" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$pembayaran->kasir_id}}">
                  </div>

                  <div class="form-group">
                    <label for="pelanggan_id">Pelanggan</label>
                    <input type="text" class="form-control" name="pelanggan_id" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$pembayaran->pelanggan_id}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="pulsa_id">Pulsa</label>
                    <input type="text" class="form-control" name="pulsa_id" id="exampleInputEmail1" placeholder="Pulsa" value="{{$pembayaran->pulsa_id}}">
                  </div>
                  
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="exampleInputEmail1" placeholder="Tanggal" value="{{$pembayaran->tanggal}}">
                </div>

                <div class="form-group">
                  </label for="total">Total</label>
                  <input type="number" name="total" class="form-control" placeholder ="Total" value="{{$pembayaran->total}}">
                  
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
