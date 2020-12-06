@extends('layouts.app')
@push('adduserscript')
<script>
  $(document).ready(function() {
    var selectedRole = $("select.role").children("option:selected").val();
    console.log(selectedRole);
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

</script>
@endpush
@section('title')
Edit User
@endsection
@section('body')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{url('/user')}}">Management User</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit User</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-status pop up alert--->
@if (session('status'))
<div class="alert alert-success" role="alert"><i class="fa fa-bell"></i>
    {{ session('status') }}
</div>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 1000);
</script>
@endif
    </div>
</div>

<!--Modal Edit-->
<div class="modal-body">
  <form action="{{ url('updateuser/'.$User->id)}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group">
        <label>Id User</label>
        <input type="text" name="id" class="form-control" value="{{$User->getuserID()}}" readonly>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" id="email" class="form-control"  value="{{$User->email}}" autofocus required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control"  value="{{$User->password}}" autofocus required>
    </div>
    <div class="form-group">
        <label>Role</label>
        <select class="form-control role" name="role" id="role" autofocus required>
          <option selected disabled hidden>-- Pilih Role --</option>
          <option value="Admin" @if ($User->role=='Admin') 
          selected @endif>Admin</option>
          <option value="Guru" @if ($User->role=='Guru') 
            selected @endif>Guru</option>
          <option value="Siswa" @if ($User->role=='Siswa') 
            selected @endif>Siswa</option>
        </select>
      </div>
      <div id="div-guru" class="form-group">
        <label>Guru</label>
        <select class="form-control" name="guru" id="guru" autofocus required>
          @foreach ( $Guru as $guru )
          {{ logger($guru->id) }}
          {{ logger($User->id_personil) }}
          <option @if ($User->role=="Admin") selected @endif disabled hidden>-- Pilih Guru --</option>
          <option value="{{$guru->id}}" @if ($User->id_personil==$guru->id) selected @endif>({{$guru->nip}}) {{$guru->nama}}</option>
          @endforeach
        </select>
      </div>
      <div id="div-siswa" class="form-group">
        <label>Siswa</label>
        <select class="form-control" name="siswa" id="siswa" autofocus required>
          @foreach ( $Siswa as $siswa )
          <option selected disabled hidden>-- Pilih Siswa --</option>
          <option value="{{$siswa->id}}" @if ($User->id_personil==$siswa->id) selected @endif>({{$siswa->nis}}) {{$siswa->nama}}</option>
          @endforeach
        </select>
      </div>
</div>
<div class="modal-footer">
    <a href="{{url('/user')}}" class="btn btn-secondary">Tutup</a>
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
@endsection