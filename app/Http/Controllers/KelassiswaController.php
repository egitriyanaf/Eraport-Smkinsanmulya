<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kelassiswa;

class KelassiswaController extends Controller
{
    public function index()
    {
        $kelassiswa=Kelassiswa::paginate(5);
        $kelassiswa->useBootstrap();
        return view('/kelassiswa.index',['Kelassiswa'=>$kelassiswa]);
    }

    public function search(Request $request)
    {
        $cari=$request->cari;
        $kelassiswa=Kelassiswa::where('jurusan','LIKE',"%".$cari."%")
        ->paginate();
        return view('/kelassiswa.index',['Kelassiswa'=>$kelassiswa]);
    }

    public function tambahkelassiswa(Request $request)
    {
        Kelassiswa::create([
            'nis'=> $request->nis,
            'nama'=> $request->nama,
            'jurusan'=> $request->jurusan,
            'tahun_ajaran'=> $request->tahunajaran,
            'kelas'=> $request->kelas,
            'nama_kelas'=> $request->namakelas,
            'wali_kelas' => $request->walikelas
            ]);
        return redirect('/kelassiswa')->with('status', 'data berhasil ditambahkan!');
    }

    public function editkelassiswa($id)
    {
        $kelassiswa=Kelassiswa::find($id);
      return view('/kelassiswa.edit',['Kelassiswa' => $kelassiswa]);
    }

    public function updatekelassiswa(Request $request, $id)
    {
        $kelassiswa=Kelassiswa::FindOrFail($id);
        $kelassiswa->update([
            'nis'=> $request->nis,
            'nama'=> $request->nama,
            'jurusan'=> $request->jurusan,
            'tahun_ajaran'=> $request->tahunajaran,
            'kelas'=> $request->kelas,
            'nama_kelas'=> $request->namakelas,
            'wali_kelas' => $request->walikelas       
            ]);
         return redirect('/kelassiswa')->with('status', 'data berhasil diupdate!');
    }

    public function deletekelassiswa()
    {
        $kelassiswa=Kelassiswa::FindOrFail($id);
        $kelassiswa->delete();
        return redirect('/kelassiswa')->with('status', 'data berhasil dihapus!');
    }
}
