<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
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
        if ($request->file('photo')) {
            $photo = $request->file('photo');
        $name= $request->file('photo')->getClientOriginalName();
        $extension = $request->file('photo')->extension();
        $path = $photo->storeAs(
            'avatar siswa', $name, 'public'
        );
        Siswa::create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'photo' => $name,
                'tanggal_lahir'=>$request->tanggallahir,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
                ]);
            }
            else {
                Siswa::create([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'tanggal_lahir'=>$request->tanggallahir,
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
        $lokasifile = storage_path().'/app/public/avatar siswa/'.$siswa->photo;
        if ($request->File('photo')) {
            $photo = $request->file('photo');
            $name= $request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->extension();
            $path = $photo->storeAs(
                'avatar siswa', $name, 'public'
            ); 
            $siswa->update([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'photo' => $name,
                    'tanggal_lahir'=>$request->tanggallahir,
                    'email' => $request->email,
                    'password' => Hash::make($request['password'])
            ]);
            } 
            $siswa->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'tanggal_lahir'=>$request->tanggallahir,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
        ]);
            
        return redirect('/siswa')->with('status', 'data berhasil diupdate!');  
    }

    public function deletesiswa($id)
    {   
        Siswa::find($id)->delete();       
        return redirect('/siswa')->with('status', 'data berhasil dihapus!');
    }
}
