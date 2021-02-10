@extends('layouts.app')
@section('title')
Laporan Siswa
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
                                <form role="search" class="sr-input-func" method="GET" action="{{url('/siswa/search')}}">
                                    <input name="cari" type="text" placeholder="Search..." value="{{old('cari')}}" class="search-int form-control">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/laporansiswa')}}">Laporan Siswa</a> <span class="bread-slash"></span>
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
  <div>
      <a href="{{ url('/laporansiswa/cetak_pdf')}}" class="btn btn-primary pull-right"><i class="fa fa-print"> Cetak</i></a>
  </div>
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Laporan Data</span> siswa</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class=" text-center" scope="col">No</th>
                                <th class=" text-center" scope="col">ID Siswa</th>
                                <th class=" text-center" scope="col">NIS</th>
                                <th class=" text-center" scope="col">Nama Siswa</th>
                                <th class=" text-center" scope="col">Jenis Kelamin</th>
                                <th class="text-center" scope="col">Agama</th>
                                <th class=" text-center" scope="col">Telepon</th>
                                <th class=" text-center" scope="col">Tahun Angkatan</th>
                                <th class=" text-center" scope="col">Photo</th> 
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($Siswa as $key => $siswa)
                              <tr>
                                <th class=" text-center" scope="row">{{ $Siswa->firstItem() + $key }}</th>
                                <td class=" text-center" scope="row">{{ $siswa->getsiswaID() }}</td>
                                <td class=" text-center" scope="row">{{ $siswa->nis }}</td>
                                <td class=" text-center" scope="row">{{ $siswa->nama }}</td>
                                <td class=" text-center" scope="row">{{ $siswa->jenis_kelamin }}</td>
                                <td class=" text-center" scope="row">{{ $siswa->telepon }}</td>
                                <td class=" text-center" scope="row">{{ $siswa->tanggal_lahir }}</td>
                                <td class=" text-center" scope="row">{{ $siswa->tahun_angkatan }}</td>
                                <td class=" text-center" scope="row"><img width="40px" height="60px" src="{{ url('/storage/avatar siswa/'.$siswa->photo) }}"></td>
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
            {{$Siswa->firstItem()}}
            sampai
            {{$Siswa->lastItem()}}
            dari
            {{$Siswa->total()}}
            total data
          </div>
          <div class="fa-pull-right">
            {{$Siswa->links()}}
          </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/tambahsiswa')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Id Siswa</label>
            <input type="text" name="Id" class="form-control" autofocus value="{{$siswa->getsiswaIDplus()}}" readonly>
        </div>
          <div class="form-group">
              <label>Nomor Induk Siswa</label>
              <input type="text" name="nis" class="form-control" autofocus required maxlength="15">
          </div>
          <div class="form-group">
              <label>Nama Siswa</label>
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
                <label for="uploadphoto">Upload Photo</label>
                <input type="file" name="photo" class="form-control-file" id="uploadphoto">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggallahir" id="tanggallahir" class="form-control" autofocus required>
            </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempatlahir" id="tempatlahir" class="form-control" maxlength="30" autofocus required>
            </div>
              <div class="form-group">
                <label>Agama</label>
                <input type="text" name="agama" id="agama" class="form-control" maxlength="20" autofocus required>
            </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" autofocus required>
            </div>
              <div class="form-group">
                <label>Tahun Angkatan</label>
                <input type="text" name="tahunangkatan" id="tahunangkatan" class="form-control" maxlength="30" autofocus required>
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