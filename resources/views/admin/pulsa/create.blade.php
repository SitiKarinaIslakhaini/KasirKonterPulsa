@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pulsa </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/pulsa/store')}}" method="POST">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_pulsa"> Nama</label>
                    <input type="text" class="form-control" name="nama_pulsa"id="exampleInputEmail1" placeholder="Nama Pulsa">
                  </div>
                  <div class="form-group">
                  </label for="nominal">Nominal</label>
                  <input type="number" name="nominal" class="form-control" placeholder ="Nominal" >
                 </div>
                  <div class="form-group">
                  </label for="harga">Harga</label>
                  <input type="number" name="harga" class="form-control" placeholder ="Harga" >
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
           