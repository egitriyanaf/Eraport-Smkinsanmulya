<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    { 
    $admin=Admin::paginate(5);
    $admin->useBootstrap();    
    return view('admin/index',['Admin'=>$admin]);
    }

    public function search(Request $request)
    {
        $cari=$request->cari;
        $admin=Admin::where('nama','LIKE',"%".$cari."%")
        ->paginate();
        return view('admin/index',['Admin'=>$admin]);
    }

    public function tambahadmin(Request $request)
    {   
        $latest_admin=DB::table('Admins')->latest('created_at')->first();
        if ($latest_admin) {
        $latest_id_admin=$latest_admin->id;
        $temp_id=$latest_id_admin+1;   
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
        Admin::create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'photo' => $photoname,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
                ]);
        }
        else {
            Admin::create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
                ]);    
        }
        
        
        return redirect('/admin')->with('status', 'data berhasil ditambahkan!');
    }

    public function editadmin($id)
    {
        $admin=Admin::find($id);
      return view('/admin/edit',['Admin' => $admin]);
    }

    public function updateadmin(Request $request, $id)
    {   
        $admin=Admin::FindOrFail($id);
        $idphoto=$admin->id;
        $lokasifile = storage_path().'/app/public/avatar admin/'.$admin->photo;
        if ($request->File('photo')) {
            $photo = $request->file('photo');
            $file= $request->file('photo')->getClientOriginalName();
            $filename= pathinfo($file, PATHINFO_FILENAME);
            $fileextension= pathinfo($file, PATHINFO_EXTENSION);
            $photoname = 'foto-admin'.'_'.$idphoto.'.'.$fileextension;
            $path = $photo->storeAs(
                'avatar admin', $photoname, 'public'
            );
            $admin->update([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'photo' => $photoname,
                    'email' => $request->email,
                    'password' => Hash::make($request['password'])
            ]);
            } 
            $admin->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jeniskelamin,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'password' => Hash::make($request['password'])
        ]);
            
        return redirect('/admin')->with('status', 'data berhasil diupdate!');  
    }

    public function deleteadmin($id)
    {   
        $admin=Admin::find($id);
        $lokasifile = storage_path().'/app/public/avatar admin/'.$admin->photo;
        if ($admin->exists('photo')) {
            if (file_exists($lokasifile)) {
                unlink($lokasifile);
             }
             }
             $admin->delete();
        return redirect('/admin')->with('status', 'data berhasil dihapus!');
    }
}
