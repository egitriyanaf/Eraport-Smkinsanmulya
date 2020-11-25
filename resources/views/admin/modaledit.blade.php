<!--Modal Edit-->
<div class="modal-body">
  <form action="{{ url('updateadmin/'.$Admin->id)}}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group">
        <label>NIP</label>
        <input type="text" name="nip" class="form-control" value="{{$Admin->nip}}" autofocus required maxlength="10">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{$Admin->nama}}" autofocus required maxlength="25">
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select class="form-control" name="jeniskelamin" id="jeniskelamin" value="{{$Admin->jenis_kelamin}}">
            <option value="Laki-laki" @if ($Admin->jenis_kelamin=='Laki-laki')
              selected @endif>Laki-laki</option>
            <option value="Perempuan" @if ($Admin->jenis_kelamin=='Perempuan')
              selected @endif>Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" value="{{$Admin->telepon}}" autofocus required maxlength="16">
    </div>
        <div class="form-group">
          <label for="uploadphoto">Upload Photo</label>
          <input type="file" name="photo" class="form-control-file" id="uploadphoto" value="{{$Admin->nama}}">
        </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" id="email" class="form-control"  value="{{$Admin->email}}" autofocus required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control"  value="{{$Admin->password}}" autofocus required>
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