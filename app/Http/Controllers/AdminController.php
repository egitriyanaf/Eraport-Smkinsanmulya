<?php

namespace App\Http\Controllers;
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

    public function tambahadmin(Request $request)
    {
        $tambah=new Admin;
        $tambah->nip = $request->nip;
        $tambah->nama = $request->nama;
        $tambah->jenis_kelamin = $request->jeniskelamin;
        $tambah->telepon = $request->telepon;
        $tambah->photo=$request->photo;
        $tambah->email = $request->email;  
        $tambah->password = $request->password;
        $tambah->save();
        
        return redirect('/admin')->with('status', 'data berhasil ditambahkan!');

    }

    public function editadmin($id)
    {
        $admin=Admin::find($id);
      return view('/admin/edit',['Admin' => $admin]);
    }

    public function updateadmin(Request $request, $id)
    {   
        
        $update=Admin::where('id',$id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jeniskelamin,
            'telepon' => $request->telepon,
            'photo' => $request->photo,
            'email'=> $request->email,
            'password'=>$request->password
        ]);
        return redirect('/admin')->with('status', 'data berhasil diupdate!');  
        
    }

    public function deleteadmin($id)
    {   
        Admin::where('id',$id)->delete();

        return redirect('/admin')->with('status', 'data berhasil dihapus!');
        
    }
}
