<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
        $latest_guru=DB::table('Guru')->latest('created_at')->first();
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
        Guru::create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'photo' => $photoname,
                ]);
            }
            else {
                Guru::create([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'alamat' => $request->alamat,
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
        $idphoto=$guru->id;
        $lokasifile = storage_path().'/app/public/avatar guru/'.$guru->photo;
        if ($request->File('photo')) {
            $photo = $request->file('photo');
            $file= $request->file('photo')->getClientOriginalName();
            $filename= pathinfo($file, PATHINFO_FILENAME);
            $fileextension= pathinfo($file, PATHINFO_EXTENSION);
            $photoname = 'foto-guru'.'_'.$idphoto.'.'.$fileextension;
            $path = $photo->storeAs(
                'avatar guru', $photoname, 'public'
            ); 
            $guru->update([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'alamat' => $request->alamat,
                    'photo' => $photoname,
            ]);
            } 
            $guru->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
        ]);
            
        return redirect('/guru')->with('status', 'data berhasil diupdate!');  
    }

    public function deleteguru($id)
    {   
        $guru=Guru::find($id);
        $lokasifile = storage_path().'/app/public/avatar guru/'.$guru->photo;
        if ($guru->exists('photo')) {
            if (file_exists($lokasifile)) {
                unlink($lokasifile);
             }
             }
             $guru->delete();       
        return redirect('/guru')->with('status', 'data berhasil dihapus!');
    }
}

