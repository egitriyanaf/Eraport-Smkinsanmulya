<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;

class UserController extends Controller
{
    public function index()
    { 
    $siswa=Siswa::paginate(10);
    $guru=Guru::paginate(10);  
    $user=User::paginate(10);
    $user_with_role = 0;
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

    public function tambahuser(Request $request)
    {   
        $id_personil = 0;
        if ($request->role == "Guru") {
            $id_personil = $request->guru;
        } else if ($request->role == "Siswa") {
            $id_personil = $request->siswa; 
        } else {
            $id_personil = 0;
        }
        try {
            $tambahuser=User::create([
                'email' => $request->email,
                'password' => Hash::make($request['password']),
                'role' => $request->role,
                'id_personil' => $id_personil
                ]);
            
            return redirect('/user')->with('status', 'data berhasil ditambahkan!');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return redirect('/user')
            ->with('status', 'data gagal ditambahkan!', 'type', 'alert')
            ->with('status', 'data berhasil ditambahkan!', 'type', 'sucess');
        }
    }

    public function edituser($id)
    {
        $user=User::find($id);
        $siswa=Siswa::all();
        $guru=Guru::all();
      return view('/admin.edit',[
                'User' => $user,
                'Guru'=>$guru,
                'Siswa'=>$siswa,
                ]);
    }

    public function updateuser(Request $request, $id)
    {   
        $user=User::FindOrFail($id);
        
        $id_personil = 0;
        if ($request->role == "Guru") {
            $id_personil = $request->guru;
        } else if ($request->role == "Siswa") {
            $id_personil = $request->siswa; 
        } else {
            $id_personil = 0;
        }

        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'role' => $request->role,
            'id_personil' => $id_personil,
        ]);
            
        return redirect('/user')->with('status', 'data berhasil diupdate!');  
    }

    public function deleteuser($id)
    {   
        $user=User::find($id)->delete();
        return redirect('/user')->with('status', 'data berhasil dihapus!');
    }
}
