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
    {   
        $siswa=Siswa::all();
        $kelas = Kelas::all();
        $kelassiswa=Kelassiswa::paginate(10);
        $kelassiswa->useBootstrap();
        return view('/kelassiswa.index',[
            'Kelassiswa'=>$kelassiswa,
            'Kelas'=>$kelas,
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
            'siswa_id'=> $request->siswa,
            'kelas_id'=> $request->kelas,
            'jurusan'=> $request->jurusan,
            ]);
        return redirect('/kelassiswa')->with('status', 'data berhasil ditambahkan!');
    }

    public function editkelassiswa($id)
    {   $kelas=Kelas::all();
        $siswa=Siswa::all();
        $kelassiswa=Kelassiswa::find($id);
      return view('/kelassiswa.edit',[
          'Kelas' => $kelas,
          'Kelassiswa' => $kelassiswa,
          'Siswa' => $siswa
          ]);
    }

    public function updatekelassiswa(Request $request, $id)
    {
        $kelassiswa=Kelassiswa::FindOrFail($id);
        $kelassiswa->update([
            'siswa_id'=> $request->siswa,
            'kelas_id'=> $request->kelas,
            'jurusan'=> $request->jurusan,   
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
