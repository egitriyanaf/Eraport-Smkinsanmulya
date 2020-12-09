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
        <div class="modal-body">
          <form action="{{url('/updatekelassiswa/'.$Kelassiswa->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
          <div class="form-group">
              <label>ID Data Kelas Siswa</label>
              <input type="text" name="id" class="form-control" value="{{$Kelassiswa->getkelassiswaID()}}" autofocus readonly>
          </div>
          <div id="div-siswa" class="form-group">
            <label>Siswa</label>
            <select class="form-control" name="siswa" id="siswa" autofocus required>
              @foreach ( $Siswa as $siswa )
              <option selected disabled hidden>-- Pilih Nis --</option>
              <option value="{{$siswa->id}}">({{$siswa->nis}}) {{$siswa->nama}}</option>
              @endforeach
            </select>
          </div>
      <div class="form-group">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="{{$Kelassiswa->jurusan}}" autofocus required maxlength="60">
    </div>
    <div id="div-kelas" class="form-group">
      <label>Kelas</label>
      <select class="form-control" name="kelas" id="kelas" autofocus required>
        @foreach ( $Kelas as $kelas )
        <option selected disabled hidden>-- Pilih Kelas --</option>
        <option value="{{$kelas->id}}">{{$kelas->tahun_ajaran}} - {{$kelas->kelas}} - {{$kelas->nama_kelas}} - {{$kelas->guru->nama}}</option>
        @endforeach
      </select>
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