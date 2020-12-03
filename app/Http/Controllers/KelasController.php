<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas=Kelas::paginate(5);
        $kelas->useBootstrap();
        return view('/kelas.index',['Kelas'=>$kelas]);
    }

    public function search(Request $request)
    {
        $cari=$request->cari;
        $kelas=Kelas::where('tahun_ajaran','LIKE',"%".$cari."%")
        ->paginate();
        return view('/kelas.index',['Kelas'=>$kelas]);
    }

    public function tambahkelas(Request $request)
    {
        Kelas::create([
            'tahun_ajaran'=> $request->tahunajaran,
            'kelas'=> $request->kelas,
            'nama_kelas'=> $request->namakelas,
            'wali_kelas' => $request->walikelas
            ]);
        return redirect('/kelas')->with('status', 'data berhasil ditambahkan!');
    }

    public function editkelas($id)
    {
        $kelas=Kelas::find($id);
      return view('/kelas.edit',['Kelas' => $kelas]);
    }

    public function updatekelas(Request $request, $id)
    {
        $kelas=Kelas::FindOrFail($id);
        $kelas->update([
            'tahun_ajaran'=> $request->tahunajaran,
            'kelas'=> $request->kelas,
            'nama_kelas'=> $request->namakelas,
            'wali_kelas' => $request->walikelas        
            ]);
         return redirect('/kelas')->with('status', 'data berhasil diupdate!');
    }

    public function deletekelas()
    {
        $kelas=Kelas::FindOrFail($id);
        $kelas->delete();
        return redirect('/kelas')->with('status', 'data berhasil dihapus!');
    }
}
