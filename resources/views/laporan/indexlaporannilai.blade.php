@extends('layouts.app')
@section('title')
Laporan Nilai
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
                                <form role="search" class="sr-input-func" method="GET" action="#">
                                    <input name="cari" type="text" placeholder="Search..." value="{{old('cari')}}" class="search-int form-control">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/laporannilai')}}">Laporan Nilai</a> <span class="bread-slash"></span>
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
      <a href="#" class="btn btn-primary pull-right"><i class="fa fa-print"> Cetak Keseluruhan</i></a>
  </div>
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Laporan Data</span> Nilai</h1>
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
                                <th class=" text-center" scope="col">Semester</th>
                                <th class=" text-center" scope="col">Mata Pelajaran</th>
                                <th class="text-center" scope="col">Tugas 1</th> 
                                <th class="text-center" scope="col">Tugas 2</th> 
                                <th class="text-center" scope="col">Tugas 3</th> 
                                <th class="text-center" scope="col">UTS</th> 
                                <th class="text-center" scope="col">UAS</th> 
                                <th class="text-center" scope="col">Aksi</th> 
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($Nilai as $key => $nilai)
                              <tr>
                                <th class=" text-center" scope="row">{{ $Nilai->firstItem() + $key }}</th>
                                <td class=" text-center" scope="row">{{ $nilai->kelassiswa->siswa->nis}}</td>
                                <td class=" text-center" scope="row">{{ $nilai->kelassiswa->siswa->nama}}</td>
                                <td class=" text-center" scope="row">{{ $nilai->kelassiswa->jurusan}}</td>
                                <td class=" text-center" scope="row">{{ $nilai->semester}}</td>
                                <td class=" text-center" scope="row">{{ $nilai->matapelajaran->nama_pelajaran }}</td>
                                <td class=" text-center" scope="row">{{ $nilai->tugas_1 }}</td>
                                <td class=" text-center" scope="row">{{ $nilai->tugas_2 }}</td>
                                <td class=" text-center" scope="row">{{ $nilai->tugas_3 }}</td>
                                <td class=" text-center" scope="row">{{ $nilai->uts }}</td>
                                <td class=" text-center" scope="row">{{ $nilai->uas }}</td>
                                <td scope="row" class=" text-center">
                                    <a href="#"><button type="button" class="btn btn-primary"><i class="fa fa-print">
                                      Cetak
                                    </i></button></a>
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