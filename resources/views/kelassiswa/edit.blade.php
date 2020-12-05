@extends('layouts.app')
@section('title')
Edit Kelas Siswa
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
                                <li><a href="{{url('/kelassiswa')}}">Kelas siswa</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit Kelas siswa</span>
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
  <form action="{{ url('updatekelassiswa/'.$Kelassiswa->id)}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group">
        <label>Kode Data Kelas Siswa</label>
        <input type="text" name="id" class="form-control" value="{{$Kelassiswa->getkelassiswaID()}}" readonly>
    </div>
    <div class="form-group">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" value="{{$Kelassiswa->nis}}" autofocus required maxlength="15">
    </div>
    <div class="form-group">
      <label>Nama Siswa</label>
      <input type="text" name="nama" class="form-control" value="{{$Kelassiswa->nama}}" autofocus required maxlength="30">
  </div>
  <div class="form-group">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="{{$Kelassiswa->jurusan}}" autofocus required maxlength="60">
</div>
    <div class="form-group">
        <label>Tahun Ajaran</label>
        <input type="text" name="tahunajaran" class="form-control" value="{{$Kelassiswa->tahun_ajaran}}" autofocus required maxlength="20">
    </div>
    
    <div class="form-group">
        <label>Kelas</label>
        <select class="form-control" name="kelassiswa" id="kelassiswa" autofocus required value="{{$Kelassiswa->kelassiswa}}">
            <option value="X"@if ($Kelassiswa->kelassiswa=='X')
                selected @endif>X</option>
            <option value="XI"@if ($Kelassiswa->kelassiswa=='XI')
                selected @endif>XI</option>
            <option value="XII"@if ($Kelassiswa->kelassiswa=='XII')
                selected @endif>XII</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Nama Kelas</label>
        <input type="text" name="namakelas" class="form-control" value="{{$Kelassiswa->nama_kelas}}" autofocus required maxlength="30">
    </div>
    
    <div class="form-group">
        <label>Wali Kelas</label>
        <input type="text" name="walikelas" class="form-control" value="{{$Kelassiswa->wali_kelas}}" autofocus required maxlength="60">
    </div>
    
</div>
<div class="modal-footer">
    <a href="{{url('/kelassiswa')}}" class="btn btn-secondary">Tutup</a>
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