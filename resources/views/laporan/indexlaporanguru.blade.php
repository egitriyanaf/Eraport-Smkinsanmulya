@extends('layouts.app')
@section('title')
Laporan Guru
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
                                <li><a href="{{url('/laporanguru')}}">Laporan Guru</a> <span class="bread-slash"></span>
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
                            <h1><span class="table-project-n">Laporan Data</span> Guru</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class=" text-center" scope="col">No</th>
                                <th class=" text-center" scope="col">ID Guru</th>
                                <th class=" text-center" scope="col">NIP</th>
                                <th class=" text-center" scope="col">Nama Guru</th>
                                <th class=" text-center" scope="col">Jenis Kelamin</th>
                                <th class="text-center" scope="col">Alamat</th>
                                <th class=" text-center" scope="col">No. Telepon</th>
                                <th class=" text-center" scope="col">Photo</th> 
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($Guru as $key => $guru)
                              <tr>
                                <th class=" text-center" scope="row">{{ $Guru->firstItem() + $key }}</th>
                                <td class=" text-center" scope="row">{{ $guru->getguruID()}}</td>
                                <td class=" text-center" scope="row">{{ $guru->nip }}</td>
                                <td class=" text-center" scope="row">{{ $guru->nama }}</td>
                                <td class=" text-center" scope="row">{{ $guru->jenis_kelamin }}</td>
                                <td class=" text-center" scope="row">{{ $guru->telepon }}</td>
                                <td class=" text-center" scope="row">{{ $guru->alamat }}</td>
                                <td class=" text-center" scope="row"><img width="40px" height="60px" src="{{ url('/storage/avatar guru/'.$guru->photo) }}"></td>
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