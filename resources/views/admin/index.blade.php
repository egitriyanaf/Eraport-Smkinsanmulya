@extends('layouts.app')
@push('adduserscript')
<script>
  function validateForm(){
    var email = $("#email").val();
    var password = $("#password").val();
    var role = $('select[name=role] option').filter(':selected').val();
    var guru = $('select[name=guru] option').filter(':selected').val();
    var siswa = $('select[name=siswa] option').filter(':selected').val();

    if (role == "Admin") {
      return (
        email != "" &&
        password != "" &&
        role != ""
      )
    } else if (role == "Guru") {
      return (
        email != "" &&
        password != "" &&
        role != "" &&
        guru != ""
      )
    } else if (role == "Siswa") {
      return (
        email != "" &&
        password != "" &&
        role != "" &&
        siswa != ""
      )
    } else {
      return false;
    }
  }

  function enableSubmitButton() {
    $('#submit').prop("disabled", false);
  }

  function disableSubmitButton() {
    $('#submit').prop("disabled", true);
  }

  function validateEmail(elementValue){      
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(elementValue); 
  } 

  function validatePassword(elementValue){      
    return elementValue.length >= 8; 
  } 

  function checkSubmitButton() {
    if (validateForm()) {
      enableSubmitButton();
    } else {
      disableSubmitButton();
    }
  }

  $(document).ready(function() {
    $("#div-guru").hide();
    $("#div-siswa").hide();

    $(".modal").on('change', '#email', function(){
      var email = $("#email").val();
      if (email != "" && !validateEmail(email)) {
        $("#error-email").text("Harap masukkan email valid.");
        $("#valid-email").text("");
        $("#email").addClass('is-invalid');
        $("#email").removeClass('is-valid');
      } else if (email != "" && validateEmail(email)) {
        $("#error-email").text("");
        $("#valid-email").text("Data sudah benar.");
        $("#email").addClass('is-valid');
        $("#email").removeClass('is-invalid');
      }

      checkSubmitButton();
    });

    $(".modal").on('change', '#password', function(){
      var password = $("#password").val();
      if (password != "" && !validatePassword(password)) {
        $("#error-password").text("Harap masukkan password valid.");
        $("#valid-password").text("");
        $("#password").addClass('is-invalid');
        $("#password").removeClass('is-valid');
      } else if (password != "" && validatePassword(password)) {
        $("#error-password").text("");
        $("#valid-password").text("Data sudah benar.");
        $("#password").addClass('is-valid');
        $("#password").removeClass('is-invalid');
      }

      checkSubmitButton();
    });

    $("select.role").change(function(){
      var selectedRole = $(this).children("option:selected").val();
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

      checkSubmitButton();
    });

    $("select.guru").change(function(){
      checkSubmitButton();
    });

    $("select.siswa").change(function(){
      checkSubmitButton();
    });
  });

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
                                <li><a href="{{url('/user')}}">Management User</a> <span class="bread-slash"></span>
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
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data</span> User</h1>
                        </div>
                      </div>
                      <div style="margin: 10px; position: absolute; top: 0px; right: 25px">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          <i class="fa fa-plus">
                            Tambah Data
                          </i>
                        </button>
                      </div>
                    <!-- Button trigger modal -->
                    
                    <div class="sparkline13-graph">
                        <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th class=" text-center" scope="col">No</th>
                                <th class=" text-center" scope="col">Email</th>
                                <th class=" text-center" scope="col">Role</th>
                                <th class=" text-center" scope="col">ID Personil</th>
                                <th class=" text-center" scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($User as $key => $user)
                              <tr>
                                <th class=" text-center" scope="row">{{ $User->firstItem() + $key }}</th>
                                <td class=" text-center" scope="row">{{ $user->email }}</td>
                                <td class=" text-center" scope="row">{{ $user->role }}</td>
                                <td class=" text-center" scope="row">{{ $user->getKodeIdPersonil($user->id, $user->role, $user->id_personil) }}</td>
                                
                                <td scope="row" class=" text-center">
                                  <a href="{{url('/edituser/'.$user->id)}}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit">
                                    Edit
                                  </i></button></a>
                                  <form action="{{url('/deleteuser/'.$user->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah yakin data ini ingin di hapus?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">
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
        <form action="{{ url('/tambahuser')}}" class="needs-validation" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Id User</label>
            <input type="text" name="Id" class="form-control" autofocus value="{{$user->getuserIDplus()}}" readonly>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" maxlength="30" autofocus required placeholder="Masukkan Email">
              <span class="valid-feedback" id="valid-email"></span>
              <span class="invalid-feedback" id="error-email"></span>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" maxlength="30" autofocus required placeholder="Masukkan Password">
            <small class="form-text text-muted" id="helper-password">Minimal 8 karakter.</small>
            <span class="valid-feedback" id="valid-password"></span>
            <div class="invalid-feedback" id="error-password"></div>
        </div>
        
        
        <div class="form-group">
          <label>Role</label>
          <select class="form-control role" name="role" id="role" autofocus required>
            <option selected disabled hidden value="">-- Pilih Role --</option>
            <option value="Admin">Admin</option>
            <option value="Guru">Guru</option>
            <option value="Siswa">Siswa</option>
          </select>
        </div>
        <div id="div-guru" class="form-group">
          <label>Guru</label>
          <select class="form-control guru" name="guru" id="guru" autofocus required>
            @foreach ( $Guru as $guru )
            <option selected disabled hidden value="">-- Pilih Guru --</option>
            <option value="{{$guru->id}}">({{$guru->nip}}) {{$guru->nama}}</option>
            @endforeach
          </select>
        </div>
        <div id="div-siswa" class="form-group">
          <label>Siswa</label>
          <select class="form-control siswa" name="siswa" id="siswa" autofocus required>
            @foreach ( $Siswa as $siswa )
            <option selected disabled hidden value="">-- Pilih Siswa --</option>
            <option value="{{$siswa->id}}">({{$siswa->nis}}) {{$siswa->nama}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" disabled id="submit">Simpan</button>
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