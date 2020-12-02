<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function index()
    {
    $siswa=Siswa::paginate(5);
    $siswa->useBootstrap();    
    return view('siswa/index',['Siswa'=>$siswa]);
    }

    public function search(Request $request)
    {
        $cari=$request->cari;
        $siswa=Siswa::where('nama','LIKE',"%".$cari."%")
        ->paginate();
        return view('siswa/index',['Siswa'=>$siswa]);
    }

    public function tambahsiswa(Request $request)
    {
        $latest_guru=DB::table('guru')->latest('created_at')->first();
        if ($latest_guru) {
        $latest_id_guru=$latest_guru->id;
        $temp_id=$latest_id_guru+1;   
        }
        else {
            $temp_id=1;
        }
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $file= $request->file('photo')->getClientOriginalName();
            $filename= pathinfo($file, PATHINFO_FILENAME);
            $fileextension= pathinfo($file, PATHINFO_EXTENSION);
            $photoname = 'foto-guru'.'_'.$temp_id.'.'.$fileextension;
            $path = $photo->storeAs(
                'avatar guru', $photoname, 'public'
            ); 
        Siswa::create([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'photo' => $photoname,
                'tanggal_lahir'=>$request->tanggallahir,
                'tempat_lahir'=>$request->tempatlahir,
                'agama'=>$request->agama,
                'alamat'=>$request->alamat,
                'tahun_angkatan'=>$request->tahunangkatan,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
                ]);
            }
            else {
                Siswa::create([
                    'nis' => $request->nis,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'tanggal_lahir'=>$request->tanggallahir,
                    'tempat_lahir'=>$request->tempatlahir,
                    'agama'=>$request->agama,
                    'alamat'=>$request->alamat,
                    'tahun_angkatan'=>$request->tahunangkatan,
                    'email' => $request->email,
                    'password' => Hash::make($request['password'])
                    ]);
            }
        return redirect('/siswa')->with('status', 'data berhasil ditambahkan!');
    }

    public function editsiswa($id)
    {
        $siswa=Siswa::find($id);
      return view('/siswa/edit',['Siswa' => $siswa]);
    }

    public function updatesiswa(Request $request, $id)
    {   
        $siswa=siswa::FindOrFail($id);
        $idphoto=$siswa->id;
        $lokasifile = storage_path().'/app/public/avatar siswa/'.$siswa->photo;
        if ($request->File('photo')) {
            $photo = $request->file('photo');
            $file= $request->file('photo')->getClientOriginalName();
            $filename= pathinfo($file, PATHINFO_FILENAME);
            $fileextension= pathinfo($file, PATHINFO_EXTENSION);
            $photoname = 'foto-siswa'.'_'.$idphoto.'.'.$fileextension;
            $path = $photo->storeAs(
                'avatar siswa', $photoname, 'public'
            ); 
            $siswa->update([
                    'nis' => $request->nis,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'photo' => $photoname,
                    'tanggal_lahir'=>$request->tanggallahir,
                    'tempat_lahir'=>$request->tempatlahir,
                    'agama'=>$request->agama,
                    'alamat'=>$request->alamat,
                    'tahun_angkatan'=>$request->tahunangkatan,
                    'email' => $request->email,
                    'password' => Hash::make($request['password'])
            ]);
            } 
            $siswa->update([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'tanggal_lahir'=>$request->tanggallahir,
                'tempat_lahir'=>$request->tempatlahir,
                'agama'=>$request->agama,
                'alamat'=>$request->alamat,
                'tahun_angkatan'=>$request->tahunangkatan,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
        ]);
            
        return redirect('/siswa')->with('status', 'data berhasil diupdate!');  
    }

    public function deletesiswa($id)
    {   
        $siswa=Siswa::find($id);
        $lokasifile = storage_path().'/app/public/avatar siswa/'.$siswa->photo;
        if ($siswa->exists('photo')) {
            if (file_exists($lokasifile)) {
                unlink($lokasifile);
             }
             }
             $siswa->delete();     
        return redirect('/siswa')->with('status', 'data berhasil dihapus!');
    }
}
