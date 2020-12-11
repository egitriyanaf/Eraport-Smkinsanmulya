<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $siswa = Siswa::paginate(10);
        $guru = Guru::paginate(10);
        $user = User::paginate(10);
        $user_with_role = 0;
        $user->useBootstrap();
        return view('admin/index',
            ['User' => $user,
                'Guru' => $guru,
                'Siswa' => $siswa,
            ]);
    }

    public function search(Request $request)
    {
        $cari = $request->cari;
        $user = User::where('name', 'LIKE', "%" . $cari . "%")
            ->paginate();
        return view('admin/index', ['User' => $user]);
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
            $tambahuser = User::create([
                'email' => $request->email,
                'password' => Hash::make($request['password']),
                'role' => $request->role,
                'id_personil' => $id_personil,
            ]);

            return redirect('/user')
                ->with('icon', 'success')
                ->with('title', 'Sukses!')
                ->with('text', 'Data berhasil ditambah.');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            // print_r($errorInfo);
            if ($errorInfo[1] == 1062) {
                return redirect('/user')
                    ->with('icon', 'error')
                    ->with('title', 'Gagal!')
                    ->with('text', 'Data tersebut sudah ada.');
            } else {
                return redirect('/user')
                    ->with('icon', 'error')
                    ->with('title', 'Gagal!')
                    ->with('text', 'Error: ' . $errorInfo[1] . ' ' . $errorInfo[2]);
            }
        }
    }

    public function edituser($id)
    {
        try {
            $user = User::find($id);
            $siswa = Siswa::all();
            $guru = Guru::all();
            return view('/admin.edit', [
                'User' => $user,
                'Guru' => $guru,
                'Siswa' => $siswa,
            ]);
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            // print_r($errorInfo);
            if ($errorInfo[1] == 1062) {
                return redirect('/user')
                    ->with('icon', 'error')
                    ->with('title', 'Gagal!')
                    ->with('text', 'Data tersebut sudah ada.');
            } else {
                return redirect('/user')
                    ->with('icon', 'error')
                    ->with('title', 'Gagal!')
                    ->with('text', 'Error: ' . $errorInfo[1] . ' ' . $errorInfo[2]);
            }
        }

    }

    public function updateuser(Request $request, $id)
    {
        try {

            $user = User::FindOrFail($id);

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

            return redirect('/user')
                ->with('icon', 'success')
                ->with('title', 'Sukses!')
                ->with('text', 'Data berhasil diupdate.');
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            // print_r($errorInfo);
            if ($errorInfo[1] == 1062) {
                return redirect('/user')
                    ->with('icon', 'error')
                    ->with('title', 'Gagal!')
                    ->with('text', 'Data tersebut sudah ada.');
            } else {
                return redirect('/user')
                    ->with('icon', 'error')
                    ->with('title', 'Gagal!')
                    ->with('text', 'Error: ' . $errorInfo[1] . ' ' . $errorInfo[2]);
            }
        }
    }

    public function deleteuser($id)
    {
        $user = User::find($id)->delete();
        return redirect('/user')->with('status', 'data berhasil dihapus!');
    }
}
