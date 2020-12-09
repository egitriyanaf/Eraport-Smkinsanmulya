@extends('layouts.app')
@section('title')
Laporan Kelas
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
                                <li><a href="{{url('/laporankelas')}}">Laporan Kelas</a> <span class="bread-slash"></span>
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
      <a href="#" class="btn btn-primary pull-right"><i class="fa fa-print"> Cetak</i></a>
  </div>
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Laporan Data</span> Kelas</h1>
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
                                <th class="text-center" scope="col">Wali Kelas</th> 
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($Kelas as $key => $kelas)
                              <tr>
                                <th class=" text-center" scope="row">{{ $Kelas->firstItem() + $key }}</th>
                                <td class=" text-center" scope="row">{{ $kelas->getkelasID()}}</td>
                                <td class=" text-center" scope="row">{{ $kelas->tahun_ajaran }}</td>
                                <td class=" text-center" scope="row">{{ $kelas->kelas }}</td>
                                <td class=" text-center" scope="row">{{ $kelas->nama_kelas }}</td>
                                <td class=" text-center" scope="row">{{ $kelas->guru->nama }}</td>
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