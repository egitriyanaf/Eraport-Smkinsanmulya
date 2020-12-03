@extends('layouts.app')
@section('title')
Management Guru
@endsection
@section('body')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func" method="GET" action="{{url('/guru/search')}}">
                                    <input name="cari" type="text" placeholder="Search..." value="{{old('cari')}}" class="search-int form-control">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/guru')}}">Management Guru</a> <span class="bread-slash"></span>
                                </li>
                                {{-- <li><span class="bread-blod">@yield()</span>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

         @include('layouts/sessionsuccess') 
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Button trigger modal -->
<div><button type="button" class="btn btn-primary fa-pull-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">
  Tambah Data
</i></button></div>
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data</span> guru</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class=" text-center" scope="col">No</th>
                                <th class=" text-center" scope="col">Nip</th>
                                <th class=" text-center" scope="col">Nama Guru</th>
                                <th class=" text-center" scope="col">Jenis Kelamin</th>
                                <th class=" text-center" scope="col">Telepon</th>
                                <th class=" text-center" scope="col">Photo</th>
                                <th class=" text-center" scope="col">Email</th>
                                <th class=" text-center" scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($Guru as $key => $guru)
                              <tr>
                                <th class=" text-center" scope="row">{{ $Guru->firstItem() + $key }}</th>
                                <td class=" text-center" scope="row">{{ $guru->nip }}</td>
                                <td class=" text-center" scope="row">{{ $guru->nama }}</td>
                                <td class=" text-center" scope="row">{{ $guru->jenis_kelamin }}</td>
                                <td class=" text-center" scope="row">{{ $guru->telepon }}</td>
                                <td class=" text-center" scope="row"><img width="40px" height="60px" src="{{ url('/storage/avatar guru/'.$guru->photo) }}"></td>
                                <td class=" text-center" scope="row">{{ $guru->email }}</td>
                                <td scope="row" class=" text-center">
                                  <a href="{{url('/editguru/'.$guru->id)}}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit">
                                    Edit
                                  </i></button></a>
                                    <form action="{{url('/deleteguru/'.$guru->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah yakin data ini ingin di hapus?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">
                                          <i class="fa fa-trash"> Delete</i>
                                        </button>
                                      </form>
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fa-pull-left">
            Menampilkan
            {{$Guru->firstItem()}}
            sampai
            {{$Guru->lastItem()}}
            dari
            {{$Guru->total()}}
            total data
          </div>
          <div class="fa-pull-right">
            {{$Guru->links()}}
          </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/tambahguru')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Id Guru</label>
            <input type="text" name="Id" class="form-control" autofocus value="{{$guru->id+1}}" readonly>
        </div>
          <div class="form-group">
              <label>NIP</label>
              <input type="text" name="nip" class="form-control" autofocus required maxlength="15">
          </div>
          <div class="form-group">
              <label>Nama Guru</label>
              <input type="text" name="nama" class="form-control" autofocus required maxlength="30">
          </div>
          <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="form-control" name="jeniskelamin" id="jeniskelamin">
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
              </select>
          </div>
          <div class="form-group">
              <label>Telepon</label>
              <input type="text" name="telepon" class="form-control" autofocus required maxlength="16">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" autofocus required>
        </div>
              <div class="form-group">
                <label for="uploadphoto">Upload Photo</label>
                <input type="file" name="photo" class="form-control-file" id="uploadphoto">
              </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" maxlength="25" autofocus required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" maxlength="25" autofocus required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection

@section('footer')

<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2020. All rights reserved. SMK Insan Mulya Kibin, Kabupaten Serang</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection