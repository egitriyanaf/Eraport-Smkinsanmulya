@extends('layouts.app')
@section('title')
Nilai Raport
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
                                <form role="search" class="sr-input-func" method="GET" action="{{url('/nilairaport/search')}}">
                                    <input name="cari" type="text" placeholder="Search..." value="{{old('cari')}}" class="search-int form-control">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/nilairaport')}}">Nilai Raport</a> <span class="bread-slash"></span>
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
                            <h1><span class="table-project-n">Data</span> Nilai Raport</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class=" text-center" scope="col">No</th>
                                <th class=" text-center" scope="col">Mata Pelajaran</th>
                                <th class=" text-center" scope="col">Semester</th>
                                <th class=" text-center" scope="col">Tugas 1</th>
                                <th class=" text-center" scope="col">Tugas 2</th>
                                <th class=" text-center" scope="col">Tugas 3</th>
                                <th class=" text-center" scope="col">UTS</th>
                                <th class=" text-center" scope="col">UAS</th>
                                <th class=" text-center" scope="col">Nilai Rata-rata</th>
                                <th class=" text-center" scope="col">Grade</th>
                                <th class=" text-center" scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                
                              <tr>
                                <th class=" text-center" scope="row">belom</th>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class="text-center">belom</td>
                                <td scope="row" class=" text-center">
                                  <a href="#"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit">
                                    Edit
                                  </i></button></a>
                                    <form action="#" method="POST" class="d-inline" onsubmit="return confirm('Apakah yakin data ini ingin di hapus?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">
                                          <i class="fa fa-trash"> Delete</i>
                                        </button>
                                      </form>
                                </td>
                              </tr>
                            </tbody>
                            {{--  @endforeach  --}}
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fa-pull-left">
            Menampilkan
            {{--  {{$Kelassiswa->firstItem()}}  --}} belom
            sampai
            {{--  {{$Kelassiswa->lastItem()}}  --}} belom
            dari
            {{--  {{$Kelassiswa->total()}}  --}} belom
            total data
          </div>
          <div class="fa-pull-right">
            {{--  {{$Kelassiswa->links()}}  --}} belom
          </div>
    </div>
</div>

{{--  <!-- Modal Tambah -->
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
        <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Kode Data Kelas</label>
            <input type="text" name="kodekelas" class="form-control" autofocus readonly>
        </div>
          <div class="form-group">
              <label>Nama Kelas</label>
              <input type="text" name="Nama Kelas" class="form-control" autofocus required maxlength="30">
          </div>
          <div class="form-group">
              <label>Jurusan</label>
              <input type="text" name="Jurusan" class="form-control" autofocus required maxlength="30">
          </div>
          <div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" name="namakelas" class="form-control" autofocus required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>  --}}
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