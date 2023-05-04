@extends('layouts.admin')

@section('content')


<did class="content">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Data Pembayaran</h3> &nbsp;
                <a href="{{url('/downloadpdf')}}" target="_blank" class="btn btn-info btn-md">Cetak Laporan</a>
                <div class="card-tools">
                <form action="/pembayaran/search" class="form-inline" method="GET"></from>
                    <input type="search" name="search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      
                      <th>Kasir</th>
                      <th>Pelanggan</th>
                      <th>Pulsa</th>
                      <th>Tanggal</th>
                      <th>Total</th>
                      <th>Opsi</th>
                      <th><a href="/pembayaran/create/" class="btn btn-primary">Tambah</a></th>
                      
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($pembayaran as $isla)
                    <tr>
                    <td>{{$isla->kasir->nama_kasir}}</td>
                      <td>{{$isla->pelanggan->nama_pelanggan}}</td>
                      <td>{{$isla->pulsa->nama_pulsa}}</td>
                      <td>{{$isla->tanggal}}</td>
                      <td>{{$isla->total}}</td>
                      <td> <a href="/pembayaran/{{$isla->id}}/delete" class="btn btn-danger"onclick="return confirm ('apakah Yakin Dihapus? {{$isla->total}}');"> Hapus </a>
                       <a href="/pembayaran/{{$isla->id}}/edit" class="btn btn-warning">Edit</a></td>
                       <td> <a href="/pembayaran/{{$isla->id}}/cetakstruk" class="btn btn-success" onclick="return confirm('Apakah anda yakin mencetak struk?{{$isla->nama}}');"> Cetak Struk </a>
                       <td>
                       </td>
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