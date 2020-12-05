@extends('layouts.app')
@push('adduserscript')
<script>
  $(document).ready(function() {
    $("#div-guru").hide();
    $("#div-siswa").hide();

    $("select.role").change(function(){
      var selectedRole = $(this).children("option:selected").val();
      {{--  alert("You have selected the role - " + selectedRole);  --}}

      if (selectedRole == "Guru") {
        $("#div-guru").show();
        $("#div-siswa").hide();
      } else if (selectedRole == "Siswa") {
        $("#div-guru").hide();
        $("#div-siswa").show();
      } else {
        $("#div-guru").hide();
        $("#div-siswa").hide();
      }
    });
  });

  console.log("test");
  var valueRole = document.getElementById("role");
  var divGuru = document.getElementById("div-guru");
  var divSiswa = document.getElementById("div-siswa");
  console.log(valueRole);

  if (valueRole == "Guru") {
    divGuru.style.display.display = 'block';
    divSiswa.style.display.display = 'none';
  } else if (valueRole == "Siswa") {
    divGuru.style.display.display = 'none';
    divSiswa.style.display.display = 'block';
  } 

</script>
@endpush


@section('title')
Management Admin
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
                                <form role="search" class="sr-input-func" method="GET" action="{{url('/user/search')}}">
                                    <input name="cari" type="text" placeholder="Search..." value="{{old('cari')}}" class="search-int form-control">
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/user')}}">Management Admin</a> <span class="bread-slash"></span>
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
                            <h1><span class="table-project-n">Data</span> Admin</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class=" text-center" scope="col">No</th>
                                <th class=" text-center" scope="col">Nip</th>
                                <th class=" text-center" scope="col">Nama</th>
                                <th class=" text-center" scope="col">Jenis Kelamin</th>
                                <th class=" text-center" scope="col">Telepon</th>
                                <th class=" text-center" scope="col">Photo</th>
                                <th class=" text-center" scope="col">Email</th>
                                <th class=" text-center" scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($User as $key => $user)
                              <tr>
                                <th class=" text-center" scope="row">{{ $User->firstItem() + $key }}</th>
                                <td class=" text-center" scope="row">{{ $user->nip }}</td>
                                <td class=" text-center" scope="row">{{ $user->name }}</td>
                                <td class=" text-center" scope="row">{{ $user->jenis_kelamin }}</td>
                                <td class=" text-center" scope="row">{{ $user->telepon }}</td>
                                <td class=" text-center" scope="row"><img width="40px" height="60px" src="{{ url('/storage/avatar admin/'.$user->photo) }}"></td>
                                <td class=" text-center" scope="row">{{ $user->email }}</td>
                                <td scope="row" class=" text-center">
                                  <a href="{{url('/editadmin/'.$user->id)}}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit">
                                    Edit
                                  </i></button></a>
                                    <form action="{{url('/deleteadmin/'.$user->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah yakin data ini ingin di hapus?')">
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
            {{$User->firstItem()}}
            sampai
            {{$User->lastItem()}}
            dari
            {{$User->total()}}
            total data
          </div>
          <div class="fa-pull-right">
            {{$User->links()}}
          </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/tambahadmin')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @foreach ($User as $user)
          <div class="form-group">
            <label>Id User</label>
            <input type="text" name="Id" class="form-control" autofocus value="{{$user->getuserIDplus()}}" readonly>
        </div>
        @endforeach
          <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" maxlength="30" autofocus required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" maxlength="30" autofocus required>
        </div>
        
        
        <div class="form-group">
          <label>Role</label>
          <select class="form-control role" name="role" id="role" autofocus required>
            <option selected disabled hidden>-- Pilih Role --</option>
            <option value="Admin">Admin</option>
            <option value="Guru">Guru</option>
            <option value="Siswa">Siswa</option>
          </select>
        </div>
        <div id="div-guru" class="form-group">
          <label>Guru</label>
          <select class="form-control" name="guru" id="guru" autofocus required>
            @foreach ( $Guru as $guru )
            <option selected disabled hidden>-- Pilih Guru --</option>
            <option value="{{$guru->id}}">({{$guru->nip}}) {{$guru->nama}}</option>
            @endforeach
          </select>
        </div>
        <div id="div-siswa" class="form-group">
          <label>Siswa</label>
          <select class="form-control" name="siswa" id="siswa" autofocus required>
            @foreach ( $Siswa as $siswa )
            <option selected disabled hidden>-- Pilih Siswa --</option>
            <option value="{{$siswa->id}}">({{$siswa->nis}}) {{$siswa->nama}}</option>
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