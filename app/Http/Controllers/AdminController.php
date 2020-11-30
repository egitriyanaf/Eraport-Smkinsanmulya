<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
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
        if ($request->file('photo')) {
            $photo = $request->file('photo');
        $name= $request->file('photo')->getClientOriginalName();
        $extension = $request->file('photo')->extension();
        $path = $photo->storeAs(
            'avatar admin', $name, 'public'
        );
        Admin::create([
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
        $lokasifile = storage_path().'/app/public/avatar admin/'.$admin->photo;
        if ($request->File('photo')) {
            $photo = $request->file('photo');
            $name= $request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->extension();
            $path = $photo->storeAs(
                'avatar admin', $name, 'public'
            ); 
            $admin->update([
                    'nip' => $request->nip,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jeniskelamin,
                    'telepon' => $request->telepon,
                    'photo' => $name,
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
            unlink($lokasifile);
             }
             $admin->delete();
        return redirect('/admin')->with('status', 'data berhasil dihapus!');
    }
}
