@extends('layouts.app')
@section('title')
Kelas
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
                                <form role="search" class="sr-input-func" method="GET" action="{{url('/kelas/search')}}">
                                    <input name="cari" type="text" placeholder="Search..." value="{{old('cari')}}" class="search-int form-control">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/kelas')}}">Kelas</a> <span class="bread-slash"></span>
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
                            <h1><span class="table-project-n">Data</span> Kelas</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class=" text-center" scope="col">No</th>
                                <th class=" text-center" scope="col">ID Kelas</th>
                                <th class=" text-center" scope="col">Tahun Ajaran</th>
                                <th class=" text-center" scope="col">Kelas</th>
                                <th class=" text-center" scope="col">Nama Kelas</th>
                                <th class=" text-center" scope="col">Wali Kelas</th>
                                <th class=" text-center" scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($Kelas as $key => $kelas)
                              <tr>
                                <th class=" text-center" scope="row">{{ $Kelas->firstItem()+ $key }}</th>
                                <td scope="row" class="text-center">{{ $kelas->getkelasID() }}</td>
                                <td scope="row" class="text-center">{{ $kelas->tahun_ajaran }}</td>
                                <td scope="row" class="text-center">{{ $kelas->kelas }}</td>
                                <td scope="row" class="text-center">{{ $kelas->nama_kelas }}</td>
                                <td scope="row" class="text-center">{{ $kelas->wali_kelas }}</td>
                                <td scope="row" class=" text-center">
                                  <a href="{{url('/editkelas/'.$kelas->id)}}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit">
                                    Edit
                                  </i></button></a>
                                    <form action="{{url('/deletekelas/'.$kelas->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah yakin data ini ingin di hapus?')">
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
            {{$Kelas->firstItem()}}
            sampai
            {{$Kelas->lastItem()}}
            dari
            {{$Kelas->total()}}
            total data
          </div>
          <div class="fa-pull-right">
            {{$Kelas->links()}}
          </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/tambahkelas')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>ID Kelas</label>
            <input type="text" name="kodekelas" class="form-control" value="{{$kelas->getkelasIDplus()}}" autofocus readonly>
        </div>
          <div class="form-group">
              <label>Tahun Ajaran</label>
              <input type="text" name="tahunajaran" class="form-control" autofocus required maxlength="20">
          </div>
          <div class="form-group">
              <label>Kelas</label>
              <select class="form-control" name="kelas" id="kelas" autofocus required maxlength="10">
                  <option selected disabled hidden>--Pilih Kelas--</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
              </select>
          </div>
          <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="namakelas" class="form-control" autofocus required maxlength="30">
        </div>
        <div id="div-guru" class="form-group">
          <label>Wali Kelas</label>
          <select class="form-control" name="walikelas" id="walikelas" autofocus required>
            @foreach ( $Guru as $guru )
            <option selected disabled hidden>-- Pilih Guru --</option>
            <option value="{{$guru->nama}}">{{$guru->nama}}</option>
            @endforeach
          </select>
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