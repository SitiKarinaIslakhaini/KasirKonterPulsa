@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Pulsa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pulsa/{{$pulsa->id}}/update" method="POST">
              {{csrf_field()}}
              <div class="card-body">
              
                  <div class="form-group">
                    <label for="nama_pulsa">Nama</label>
                    <input type="text" class="form-control" name="nama_pulsa" id="exampleInputEmail1" placeholder="Nama Pulsa" value="{{$pulsa->nama_pulsa}}">
                  </div>
                  
                  <div class="form-group">
                  </label for="nominal">Nominal</label>
                  <input type="number" name="nominal" class="form-control" placeholder ="Nominal" value="{{$pulsa->nominal}}">
                  </div> 
                  <div class="form-group">
                  </label for="harga">Harga</label>
                  <input type="number" name="harga" class="form-control" placeholder ="Harga" value="{{$pulsa->harga}}">
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
