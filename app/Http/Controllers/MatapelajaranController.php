<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Matapelajaran;

class MatapelajaranController extends Controller
{
    public function index()
    {
        $matapelajaran=Matapelajaran::paginate(5);
        $matapelajaran->useBootstrap();
        return view('matapelajaran/index',['Matapelajaran'=> $matapelajaran]);
    }

    public function search(Request $request)
    {
        $cari=$request->cari;
        $matapelajaran=Matapelajaran::where('nama_pelajaran','LIKE',"%".$cari."%")
        ->paginate();
        return view('matapelajaran/index',['Matapelajaran'=>$matapelajaran]);
    }

    public function tambahmatapelajaran(Request $request)
    {

        Matapelajaran::create([
            'nama_pelajaran' => $request->namapelajaran,
            'keterangan' => $request->keterangan,
            ]);
        return redirect('/matapelajaran')->with('status', 'data berhasil ditambahkan!');
    }

    public function editmatapelajaran($id)
    {
        $matapelajaran=Matapelajaran::find($id);
      return view('/matapelajaran/edit',['Matapelajaran' => $matapelajaran]);
    }

    public function updatematapelajaran(Request $request, $id)
    {
        $matapelajaran=Matapelajaran::FindOrFail($id);
        $matapelajaran->update([
            'nama_pelajaran' => $request->namapelajaran,
            'keterangan' => $request->keterangan,        
            ]);
         return redirect('/siswa')->with('status', 'data berhasil diupdate!');
    }

    public function deletematapelajaran()
    {
        $matapelajaran=Matapelajaran::FindOrFail($id);
        $matapelajaran->delete();
        return redirect('/siswa')->with('status', 'data berhasil dihapus!');
    }
}
