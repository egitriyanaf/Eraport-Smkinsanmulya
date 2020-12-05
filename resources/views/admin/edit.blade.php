@extends('layouts.app')
@section('edit admin')
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
                                <li><a href="{{url('/user')}}">Management Admin</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit Admin</span>
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
  <form action="{{ url('updateadmin/'.$User->id)}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group">
        <label>Id Admin</label>
        <input type="text" name="id" class="form-control" value="{{$User->getadminID()}}" readonly>
    </div>
    <div class="form-group">
        <label>NIP</label>
        <input type="text" name="nip" class="form-control" value="{{$User->nip}}" autofocus required maxlength="10">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{$User->name}}" autofocus required maxlength="25">
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select class="form-control" name="jeniskelamin" id="jeniskelamin" value="{{$User->jenis_kelamin}}">
            <option value="Laki-laki" @if ($User->jenis_kelamin=='Laki-laki')
              selected @endif>Laki-laki</option>
            <option value="Perempuan" @if ($User->jenis_kelamin=='Perempuan')
              selected @endif>Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" value="{{$User->telepon}}" autofocus required maxlength="16">
    </div>
        <div class="form-group">
          <label for="uploadphoto">Upload Photo</label>
          <input type="file" name="photo" class="form-control-file" id="uploadphoto">{{$User->photo}} 
        </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" id="email" class="form-control"  value="{{$User->email}}" autofocus required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control"  value="{{$User->password}}" autofocus required>
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