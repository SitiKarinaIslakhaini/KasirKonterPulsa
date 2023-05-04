@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pulsa</h3> 
                <div class="card-tools">
                  <form action="/pulsa/search" class="form-inline" method="GET">
                    <input type="search" name="search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Nominal</th>
                      <th>Harga</th>
                      <th>Opsi</th>
                      <th><a href="/pulsa/create/" class="btn btn-primary">Tambah</a><th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pulsa as $isla)
                    <tr>
                      <td>{{$isla->nama_pulsa}}</td>
                      <td>{{$isla->nominal}}</td> 
                      <td>{{$isla->harga}}</td>
                      <td> <a href="/pulsa/{{$isla->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus?{{$isla->nama_pulsa}}');"> Hapus </a>
                      <a href="/pulsa/{{$isla->id}}/edit" class="btn btn-warning">Edit</a></td>
                      <td></td>
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection 
</div>       