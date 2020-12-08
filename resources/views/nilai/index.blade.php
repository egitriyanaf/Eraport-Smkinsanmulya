@extends('layouts.app')
@section('title')
Nilai
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
                                <form role="search" class="sr-input-func" method="GET" action="{{url('/nilai/search')}}">
                                    <input name="cari" type="text" placeholder="Search..." value="{{old('cari')}}" class="search-int form-control">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/nilai')}}">Nilai</a> <span class="bread-slash"></span>
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
                            <h1><span class="table-project-n">Data</span> Nilai</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class=" text-center" scope="col">No</th>
                                <th class=" text-center" scope="col">NIS</th>
                                <th class=" text-center" scope="col">Nama Siswa</th>
                                <th class=" text-center" scope="col">Semester</th>
                                <th class=" text-center" scope="col">Mata Pelajaran</th>
                                <th class=" text-center" scope="col">Tugas 1</th>
                                <th class=" text-center" scope="col">Tugas 2</th>
                                <th class=" text-center" scope="col">Tugas 3</th>
                                <th class=" text-center" scope="col">UTS</th>
                                <th class=" text-center" scope="col">UAS</th>
                                <th class=" text-center" scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($Nilai as $key => $nilai)
                              <tr>
                                <th class=" text-center" scope="row">{{$Nilai->firstItem()+ $key}}</th>
                                <td scope="row" class="text-center">{{$nilai->id_siswa}}</td>
                                <td scope="row" class="text-center">{{$nilai->id_siswa}}</td>
                                <td scope="row" class="text-center">{{$nilai->semester}}</td>
                                <td scope="row" class="text-center">{{$nilai->id_matapelajaran}}</td>
                                <td scope="row" class="text-center">{{$nilai->tugas_1}}</td>
                                <td scope="row" class="text-center">{{$nilai->tugas_2}}</td>
                                <td scope="row" class="text-center">{{$nilai->tugas_3}}</td>
                                <td scope="row" class="text-center">{{$nilai->uts}}</td>
                                <td scope="row" class="text-center">{{$nilai->uas}}</td>
                                <td scope="row" class=" text-center">
                                  <a href="{{url('/editnilai/'.$nilai->id)}}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit">
                                    Edit
                                  </i></button></a>
                                    <form action="{{url('/deletenilai/'.$nilai->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah yakin data ini ingin di hapus?')">
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
            {{$Nilai->firstItem()}} 
            sampai
            {{$Nilai->lastItem()}} 
            dari
            {{$Nilai->total()}} 
            total data
          </div>
          <div class="fa-pull-right">
            {{$Nilai->links()}} 
          </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tambahnilai" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>ID nilai</label>
            <input type="text" name="id" class="form-control" value="{{$nilai->getnilaiIDplus()}}"  autofocus readonly>
        </div>
        <div id="div-siswa" class="form-group">
          <label>Siswa</label>
          <select class="form-control" name="siswa" id="siswa" autofocus required>
            @foreach ( $Siswa as $siswa )
            <option selected disabled hidden>-- Pilih Siswa --</option>
            <option value="{{$siswa->id}}">{{$siswa->nis}} - {{$siswa->nama}}</option>
            @endforeach
          </select>
        </div>
        <div id="div-semester" class="form-group">
          <label>Semester</label>
          <select class="form-control" name="semester" id="semester" autofocus required>
            <option selected disabled hidden>-- Pilih Semester --</option>
            <option value="Genap">Genap</option>
            <option value="Ganjil">Ganjil</option>
          </select>
        </div>
        <div id="div-matapelajaran" class="form-group">
          <label>Mata Pelajaran</label>
          <select class="form-control" name="matapelajaran" id="matapelajaran" autofocus required>
            @foreach ( $Matapelajaran as $matapelajaran )
            <option selected disabled hidden>-- Pilih Siswa --</option>
            <option value="{{$matapelajaran->id}}">{{$matapelajaran->nama_pelajaran}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Tugas 1</label>
          <input type="text" name="tugas1" class="form-control" maxlength="3" autofocus>
      </div>
        <div class="form-group">
          <label>Tugas 2</label>
          <input type="text" name="tugas2" class="form-control" maxlength="3" autofocus>
      </div>
        <div class="form-group">
          <label>Tugas 3</label>
          <input type="text" name="tugas3" class="form-control" maxlength="3" autofocus>
      </div>
        <div class="form-group">
          <label>UTS</label>
          <input type="text" name="uts" class="form-control" maxlength="3" autofocus>
      </div>
        <div class="form-group">
          <label>UAS</label>
          <input type="text" name="uas" class="form-control" maxlength="3" autofocus>
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