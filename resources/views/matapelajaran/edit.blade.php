@extends('layouts.app')
@section('title')
Edit Mata Pelajaran
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
                                <li><a href="{{url('/matapelajaran')}}">Mata Pelajaran</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit Mata Pelajaran</span>
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
  <form action="{{ url('updatematapelajaran/'.$Matapelajaran->id)}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group">
        <label>Kode Pelajaran</label>
        <input type="text" name="kodepelajaran" class="form-control" value="{{$Matapelajaran->id}}" readonly>
    </div>
    <div class="form-group">
        <label>Nama Pelajaran</label>
        <input type="text" name="namapelajaran" class="form-control" value="{{$Matapelajaran->nama_pelajaran}}" autofocus required maxlength="30">
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <select class="form-control" name="keterangan" id="keterangan" value="{{$Matapelajaran->keterangan}}">
            <option value="Wajib" @if ($Matapelajaran->keterangan=='Wajib')
              selected @endif>Wajib</option>
            <option value="Tambahan" @if ($Matapelajaran->keterangan=='Tambahan')
              selected @endif>Tambahan</option>
        </select>
    </div>
</div>
<div class="modal-footer">
    <a href="{{url('/matapelajaran')}}" class="btn btn-secondary">Tutup</a>
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