@extends('layouts.app')
@section('title')
Edit Kelas
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
                                <li><a href="{{url('/kelas')}}">Kelas</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit Kelas</span>
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
  <form action="{{ url('updatekelas/'.$Kelas->id)}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group">
        <label>Kode Kelas</label>
        <input type="text" name="id" class="form-control" value="{{$Kelas->getkelasID()}}" readonly>
    </div>
    <div class="form-group">
        <label>Tahun Ajaran</label>
        <input type="text" name="tahunajaran" class="form-control" value="{{$Kelas->tahun_ajaran}}" autofocus required maxlength="20">
    </div>
    
    <div class="form-group">
        <label>Kelas</label>
        <select class="form-control" name="kelas" id="kelas" autofocus required value="{{$Kelas->kelas}}">
            <option value="X"@if ($Kelas->kelas=='X')
                selected @endif>X</option>
            <option value="XI"@if ($Kelas->kelas=='XI')
                selected @endif>XI</option>
            <option value="XII"@if ($Kelas->kelas=='XII')
                selected @endif>XII</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Nama Kelas</label>
        <input type="text" name="namakelas" class="form-control" value="{{$Kelas->nama_kelas}}" autofocus required maxlength="30">
    </div>
    
    <div class="form-group">
        <label>Wali Kelas</label>
        <input type="text" name="walikelas" class="form-control" value="{{$Kelas->wali_kelas}}" autofocus required maxlength="60">
    </div>
    
</div>
<div class="modal-footer">
    <a href="{{url('/kelas')}}" class="btn btn-secondary">Tutup</a>
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