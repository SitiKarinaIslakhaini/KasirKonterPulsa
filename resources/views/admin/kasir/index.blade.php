@extends('layouts.admin')

@section('content')

<div class="content">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kasir</h3>

                <div class="card-tools">
                  <form action="/kasir/search" class="form-inline" method="GET">
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
                      <th>Email</th>
                      <th>Password</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No Telp</th>
                      <th>Opsi</th>
                      <th><a href="/kasir/create/" class="btn btn-primary">Tambah</a><th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kasir as $isla)
                    <tr>
                      <td>{{$isla->email}}</td> 
                      <td>{{$isla->password}}</td>
                      <td>{{$isla->nama_kasir}}</td>
                      <td>{{$isla->alamat_kasir}}</td> 
                      <td>{{$isla->notelp_kasir}}</td>
                      <td> <a href="/kasir/{{$isla->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus?{{$isla->nama_kasir}}');"> Hapus </a>
                      <a href="/kasir/{{$isla->id}}/edit" class="btn btn-warning">Edit</a></td>
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