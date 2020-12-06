<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kelassiswa;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Kelas;

class KelassiswaController extends Controller
{
    public function index()
    {   $kelas=Kelas::All();
        $guru=Guru::All();
        $siswa=Siswa::All();
        $kelassiswa=Kelassiswa::paginate(10);
        $kelassiswa->useBootstrap();
        return view('/kelassiswa.index',[
            'Kelassiswa'=>$kelassiswa,
            'Kelas'=>$kelas,
            'Guru'=>$guru,
            'Siswa'=>$siswa,
            ]);
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
            'nis'=> $request->nisnama,
            'nama'=> $request->nisnama,
            'jurusan'=> $request->jurusan,
            'tahun_ajaran'=> $request->tahunajaran,
            'kelas'=> $request->kelas,
            'nama_kelas'=> $request->namakelas,
            'wali_kelas' => $request->walikelas
            ]);
        return redirect('/kelassiswa')->with('status', 'data berhasil ditambahkan!');
    }

    public function editkelassiswa($id)
    {   $kelas=Kelas::All();
        $guru=Guru::All();
        $siswa=Siswa::All();
        $kelassiswa=Kelassiswa::find($id);
      return view('/kelassiswa.edit',[
          'Kelas' => $kelas,
          'Kelassiswa' => $kelassiswa,
          'Guru' => $guru,
          'Siswa' => $siswa
          ]);
    }

    public function updatekelassiswa(Request $request, $id)
    {
        $kelassiswa=Kelassiswa::FindOrFail($id);
        $kelassiswa->update([
            'nis'=> $request->nisnama,
            'nama'=> $request->nisnama,
            'jurusan'=> $request->jurusan,
            'tahun_ajaran'=> $request->tahunajaran,
            'kelas'=> $request->kelas,
            'nama_kelas'=> $request->namakelas,
            'wali_kelas' => $request->walikelas       
            ]);
         return redirect('/kelassiswa')->with('status', 'data berhasil diupdate!');
    }

    public function deletekelassiswa($id)
    {
        $kelassiswa=Kelassiswa::FindOrFail($id);
        $kelassiswa->delete();
        return redirect('/kelassiswa')->with('status', 'data berhasil dihapus!');
    }
}
