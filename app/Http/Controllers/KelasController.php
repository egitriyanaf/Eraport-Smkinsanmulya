<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Guru;

class KelasController extends Controller
{
    public function index()
    {   
        $guru=Guru::paginate(10);
        $kelas=Kelas::paginate(10);
        $kelas->useBootstrap();
        return view('/kelas.index',[
            'Kelas'=>$kelas,
            'Guru'=>$guru
        ]);
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
            'guru_id' => $request->walikelas
            ]);
        return redirect('/kelas')->with('status', 'data berhasil ditambahkan!');
    }

    public function editkelas($id)
    {   $guru=Guru::All();
        $kelas=Kelas::find($id);
      return view('/kelas.edit',[
          'Kelas' => $kelas,
          'Guru' => $guru
          ]);
    }

    public function updatekelas(Request $request, $id)
    {
        $kelas=Kelas::FindOrFail($id);
        $kelas->update([
            'tahun_ajaran'=> $request->tahunajaran,
            'kelas'=> $request->kelas,
            'nama_kelas'=> $request->namakelas,
            'guru_id' => $request->walikelas        
            ]);
         return redirect('/kelas')->with('status', 'data berhasil diupdate!');
    }

    public function deletekelas($id)
    {
        $kelas=Kelas::FindOrFail($id);
        $kelas->delete();
        return redirect('/kelas')->with('status', 'data berhasil dihapus!');
    }
}
