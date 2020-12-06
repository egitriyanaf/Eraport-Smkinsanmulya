@extends('layouts.app')
@section('title')
Kelas Siswa
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
                                <form role="search" class="sr-input-func" method="GET" action="{{url('/kelassiswa/search')}}">
                                    <input name="cari" type="text" placeholder="Search..." value="{{old('cari')}}" class="search-int form-control">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/kelassiswa')}}">Kelas Siswa</a> <span class="bread-slash"></span>
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
                            <h1><span class="table-project-n">Data</span> Kelas Siswa</h1>
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
                                <th class=" text-center" scope="col">Jurusan</th>
                                <th class=" text-center" scope="col">Tahun Ajaran</th>
                                <th class=" text-center" scope="col">Kelas</th>
                                <th class=" text-center" scope="col">Nama Kelas</th>
                                <th class=" text-center" scope="col">Wali Kelas</th>
                                <th class=" text-center" scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($Kelassiswa as $key => $kelassiswa)
                              <tr>
                                <th class=" text-center" scope="row">{{ $Kelassiswa->firstItem()+ $key }}</th>
                                <td scope="row" class="text-center">{{$kelassiswa->nis}}</td>
                                <td scope="row" class="text-center">{{$kelassiswa->nama}}</td>
                                <td scope="row" class="text-center">{{$kelassiswa->jurusan}}</td>
                                <td scope="row" class="text-center">{{$kelassiswa->tahun_ajaran}}</td>
                                <td scope="row" class="text-center">{{$kelassiswa->kelas}}</td>
                                <td scope="row" class="text-center">{{$kelassiswa->nama_kelas}}</td>
                                <td scope="row" class="text-center">{{$kelassiswa->wali_kelas}}</td>
                                <td scope="row" class=" text-center">
                                  <a href="{{url('/editkelassiswa/'.$kelassiswa->id)}}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit">
                                    Edit
                                  </i></button></a>
                                    <form action="{{url('/deletekelassiswa/'.$kelassiswa->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah yakin data ini ingin di hapus?')">
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
             {{$Kelassiswa->firstItem()}}  
            sampai
             {{$Kelassiswa->lastItem()}}  
            dari
             {{$Kelassiswa->total()}}  
            total data
          </div>
          <div class="fa-pull-right">
             {{$Kelassiswa->links()}}  
          </div>
    </div>
</div>

 <!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('/tambahkelassiswa')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
            <label>ID Data Kelas Siswa</label>
            <input type="text" name="id" class="form-control" value="{{$kelassiswa->getkelassiswaIDplus()}}" autofocus readonly>
        </div>
        <div id="div-nis" class="form-group">
          <label>Siswa</label>
          <select class="form-control" name="nis" id="nis" autofocus required>
            @foreach ( $Siswa as $siswa )
            <option selected disabled hidden>-- Pilih Nis --</option>
            <option value="{{$siswa->id}}">({{$siswa->nis}}) {{$siswa->nama}}</option>
            @endforeach
          </select>
        </div>
    <div class="form-group">
      <label>Jurusan</label>
      <input type="text" name="jurusan" class="form-control" autofocus required maxlength="60">
  </div>
  <div id="div-tahunajaran" class="form-group">
    <label>Tahun Ajaran</label>
    <select class="form-control" name="tahunajaran" id="tahunajaran" autofocus required>
      @foreach ( $Kelas as $kelas )
      <option selected disabled hidden>-- Pilih Tahun Ajaran --</option>
      <option value="{{$kelas->tahun_ajaran}}">{{$kelas->tahun_ajaran}}</option>
      @endforeach
    </select>
  </div>
  <div id="div-kelas" class="form-group">
    <label>Kelas</label>
    <select class="form-control" name="kelas" id="kelas" autofocus required>
      @foreach ( $Kelas as $kelas )
      <option selected disabled hidden>-- Pilih Kelas --</option>
      <option value="{{$kelas->kelas}}">{{$kelas->kelas}}</option>
      @endforeach
    </select>
  </div>
  <div id="div-namakelas" class="form-group">
    <label>Nama Kelas</label>
    <select class="form-control" name="namakelas" id="namakelas" autofocus required>
      @foreach ( $Kelas as $kelas )
      <option selected disabled hidden>-- Pilih Kelas --</option>
      <option value="{{$kelas->nama_kelas}}">{{$kelas->nama_kelas}}</option>
      @endforeach
    </select>
  </div>
    <div id="div-guru" class="form-group">
      <label>Nama Wali Kelas</label>
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