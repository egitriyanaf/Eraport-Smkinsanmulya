<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;

class AdminController extends Controller
{
    public function index()
    { 
    $siswa=Siswa::paginate(5);
    $guru=Guru::paginate(5);  
    $user=User::paginate(5);
    $user->useBootstrap();    
    return view('admin/index',
    ['User'=>$user,
    'Guru'=>$guru,
    'Siswa'=>$siswa,
    ]);
    }

    public function search(Request $request)
    {
        $cari=$request->cari;
        $user=User::where('name','LIKE',"%".$cari."%")
        ->paginate();
        return view('admin/index',['User'=>$user]);
    }

    public function tambahadmin(Request $request)
    {   
        $latest_user=DB::table('users')->latest('created_at')->first();
        if ($latest_user) {
        $latest_id_user=$latest_user->id;
        $temp_id=$latest_id_user+1;   
        }
        else {
            $temp_id=1;
        }
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $file= $request->file('photo')->getClientOriginalName();
            $filename= pathinfo($file, PATHINFO_FILENAME);
            $fileextension= pathinfo($file, PATHINFO_EXTENSION);
            $photoname = 'foto-admin'.'_'.$temp_id.'.'.$fileextension;
            $path = $photo->storeAs(
                'avatar admin', $photoname, 'public'
            ); 
        User::create([
                'nip' => $request->nip,
                'name' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'photo' => $photoname,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
                ]);
        }
        else {
            User::create([
                'nip' => $request->nip,
                'name' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
                ]);    
        }
        
        
        return redirect('/user')->with('status', 'data berhasil ditambahkan!');
    }

    public function editadmin($id)
    {
        $user=User::find($id);
      return view('/user/edit',['User' => $user]);
    }

    public function updateadmin(Request $request, $id)
    {   
        $user=User::FindOrFail($id);
        $idphoto=$user->id;
        $lokasifile = storage_path().'/app/public/avatar admin/'.$user->photo;
        if ($request->File('photo')) {
            $photo = $request->file('photo');
            $file= $request->file('photo')->getClientOriginalName();
            $filename= pathinfo($file, PATHINFO_FILENAME);
            $fileextension= pathinfo($file, PATHINFO_EXTENSION);
            $photoname = 'foto-admin'.'_'.$idphoto.'.'.$fileextension;
            $path = $photo->storeAs(
                'avatar admin', $photoname, 'public'
            );
            $user->update([
                    'nip' => $request->nip,
                    'name' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'photo' => $photoname,
                    'email' => $request->email,
                    'password' => Hash::make($request['password'])
            ]);
            } 
            $user->update([
                'nip' => $request->nip,
                'name' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
        ]);
            
        return redirect('/user')->with('status', 'data berhasil diupdate!');  
    }

    public function deleteadmin($id)
    {   
        $user=User::find($id);
        $lokasifile = storage_path().'/app/public/avatar admin/'.$user->photo;
        if ($user->exists('photo')) {
            if (file_exists($lokasifile)) {
                unlink($lokasifile);
             }
             }
             $user->delete();
        return redirect('/user')->with('status', 'data berhasil dihapus!');
    }
}
