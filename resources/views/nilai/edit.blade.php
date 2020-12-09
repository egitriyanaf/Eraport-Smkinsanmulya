@extends('layouts.app')
@section('title')
Edit Nilai
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
                                <li><a href="{{url('/nilai')}}">Nilai</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit Nilai</span>
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
    <form action="{{url('/updatenilai/'.$Nilai->id)}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf
        <div class="form-group">
        <label>ID nilai</label>
        <input type="text" name="id" class="form-control" value="{{$Nilai->getnilaiID()}}"  autofocus readonly>
        </div>
            <div id="div-siswa" class="form-group">
            <label>Siswa</label>
            <select class="form-control" name="siswa" id="siswa" autofocus required>
            @foreach ( $Kelassiswa as $kelassiswa )
            <option selected disabled hidden>-- Pilih Siswa --</option>
            <option value="{{$kelassiswa->id}}">{{$kelassiswa->siswa->nis}} - {{$kelassiswa->siswa->nama}}</option>
            @endforeach
            </select>
            </div>
                    <div id="div-semester" class="form-group">
                    <label>Semester</label>
                    <select class="form-control" name="semester" id="semester" autofocus required>
                    <option selected disabled hidden>-- Pilih Semester --</option>
                    <option value="Genap">Genap</option>
                    <option value="Ganjil">Ganjil</option>
                    </select>
                    </div>
                    <div id="div-matapelajaran" class="form-group">
                    <label>Mata Pelajaran</label>
                    <select class="form-control" name="matapelajaran" id="matapelajaran" autofocus required>
                    @foreach ( $Matapelajaran as $matapelajaran )
                    <option selected disabled hidden>-- Pilih Siswa --</option>
                    <option value="{{$matapelajaran->id}}">{{$matapelajaran->nama_pelajaran}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label>Tugas 1</label>
                    <input type="text" name="tugas1" class="form-control" value="{{$Nilai->tugas_1}}" maxlength="3" autofocus>
                    </div>
                    <div class="form-group">
                    <label>Tugas 2</label>
                    <input type="text" name="tugas2" class="form-control" value="{{$Nilai->tugas_2}}" maxlength="3" autofocus>
                    </div>
                    <div class="form-group">
                    <label>Tugas 3</label>
                    <input type="text" name="tugas3" class="form-control" value="{{$Nilai->tugas_3}}" maxlength="3" autofocus>
                    </div>
                    <div class="form-group">
                    <label>UTS</label>
                    <input type="text" name="uts" class="form-control" value="{{$Nilai->uts}}" maxlength="3" autofocus>
                    </div>
                    <div class="form-group">
                    <label>UAS</label>
                    <input type="text" name="uas" class="form-control" value="{{$Nilai->uas}}" maxlength="3" autofocus>
                    </div>
                </div>
            <div class="modal-footer">
            <a href="{{url('/nilai')}}" class="btn btn-secondary">Tutup</a>
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