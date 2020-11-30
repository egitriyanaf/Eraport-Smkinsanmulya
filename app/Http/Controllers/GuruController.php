<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Guru;


class GuruController extends Controller
{
    public function index()
    {
    $guru=Guru::paginate(5);
    $guru->useBootstrap();    
    return view('guru/index',['Guru'=>$guru]);
    }

    public function search(Request $request)
    {
        $cari=$request->cari;
        $guru=Guru::where('nama','LIKE',"%".$cari."%")
        ->paginate();
        return view('guru/index',['Guru'=>$guru]);
    }

    public function tambahguru(Request $request)
    {
        if ($request->file('photo')) {
            $photo = $request->file('photo');
        $name= $request->file('photo')->getClientOriginalName();
        $extension = $request->file('photo')->extension();
        $path = $photo->storeAs(
            'avatar guru', $name, 'public'
        );
        Guru::create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'photo' => $name,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
                ]);
            }
            else {
                Guru::create([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'email' => $request->email,
                    'password' => Hash::make($request['password'])
                    ]);
            }
        return redirect('/guru')->with('status', 'data berhasil ditambahkan!');
    }

    public function editguru($id)
    {
        $guru=Guru::find($id);
      return view('/guru/edit',['Guru' => $guru]);
    }

    public function updateguru(Request $request, $id)
    {   
        $guru=Guru::FindOrFail($id);
        $lokasifile = storage_path().'/app/public/avatar guru/'.$guru->photo;
        if ($request->File('photo')) {
            $photo = $request->file('photo');
            $name= $request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->extension();
            $path = $photo->storeAs(
                'avatar guru', $name, 'public'
            ); 
            $guru->update([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'photo' => $name,
                    'email' => $request->email,
                    'password' => Hash::make($request['password'])
            ]);
            } 
            $guru->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
        ]);
            
        return redirect('/guru')->with('status', 'data berhasil diupdate!');  
    }

    public function deleteguru($id)
    {   
        Guru::find($id)->delete();       
        return redirect('/guru')->with('status', 'data berhasil dihapus!');
    }
}

