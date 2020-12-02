@extends('layouts.app')
@section('title')
Edit Siswa
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
                                <li><a href="{{url('/siswa')}}">Management Siswa</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit Siswa</span>
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
  <form action="{{ url('updatesiswa/'.$Siswa->id)}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group">
        <label>Id siswa</label>
        <input type="text" name="id" class="form-control" value="{{$Siswa->id}}" readonly>
    </div>
    <div class="form-group">
        <label>Nomor Induk Siswa</label>
        <input type="text" name="nis" class="form-control" value="{{$Siswa->nis}}" autofocus required maxlength="10">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{$Siswa->nama}}" autofocus required maxlength="25">
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select class="form-control" name="jeniskelamin" id="jeniskelamin" value="{{$Siswa->jenis_kelamin}}">
            <option value="Laki-laki" @if ($Siswa->jenis_kelamin=='Laki-laki')
              selected @endif>Laki-laki</option>
            <option value="Perempuan" @if ($Siswa->jenis_kelamin=='Perempuan')
              selected @endif>Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" value="{{$Siswa->telepon}}" autofocus required maxlength="16">
    </div>
        <div class="form-group">
          <label for="uploadphoto">Upload Photo</label>
          <input type="file" name="photo" class="form-control-file" id="uploadphoto">{{$Siswa->photo}} 
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggallahir" id="tanggallahir" class="form-control" value="{{$Siswa->tanggal_lahir}}" autofocus required>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempatlahir" id="tempatlahir" class="form-control" value="{{$Siswa->tempat_lahir}}" maxlength="30" autofocus required>
        </div>
          <div class="form-group">
            <label>Agama</label>
            <input type="text" name="agama" id="agama" class="form-control" value="{{$Siswa->agama}}" maxlength="20" autofocus required>
        </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{$Siswa->alamat}}" autofocus required>
        </div>
          <div class="form-group">
            <label>Tahun Angkatan</label>
            <input type="text" name="tahunangkatan" id="tahunangkatan" class="form-control" value="{{$Siswa->tahun_angkatan}}" maxlength="30" autofocus required>
        </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" id="email" class="form-control"  value="{{$Siswa->email}}" autofocus required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control"  value="{{$Siswa->password}}" autofocus required>
    </div>
</div>
<div class="modal-footer">
    <a href="{{url('/siswa')}}" class="btn btn-secondary">Tutup</a>
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