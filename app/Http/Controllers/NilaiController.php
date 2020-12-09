<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Kelassiswa;
use App\Models\Matapelajaran;

class NilaiController extends Controller
{
    public function index()
    {  $nilai= Nilai::paginate();
       $kelassiswa= Kelassiswa::all();
       $matapelajaran= Matapelajaran::all();
        return view('/nilai.index',[
            'Nilai'=>$nilai,
            'Kelassiswa'=>$kelassiswa,
            'Matapelajaran'=>$matapelajaran
            ]);
    }

    public function tambahnilai(Request $request)
    {   
        Nilai::Create([
        'kelassiswa_id'=>$request->siswa,
        'semester'=>$request->semester,
        'matapelajaran_id'=>$request->matapelajaran,
        'tugas_1'=>$request->tugas1,
        'tugas_2'=>$request->tugas2,
        'tugas_3'=>$request->tugas3,
        'uts'=>$request->uts,
        'uas'=>$request->uas,
        ]);
        return redirect('/nilai')->with('status', 'data berhasil ditambahkan!');;
    }

    public function editnilai($id)
    {   
        $kelassiswa=Kelassiswa::All();
        $matapelajaran=Matapelajaran::All();
        $nilai=Nilai::find($id);
      return view('/nilai.edit',[
          'Kelassiswa' => $kelassiswa,
          'Matapelajaran' => $matapelajaran,
          'Nilai' => $nilai,
          ]);
    }

    public function updatenilai(Request $request, $id)
    {
        $nilai=Nilai::FindOrFail($id);
        $nilai->update([
            'kelassiswa_id'=>$request->siswa,
            'semester'=>$request->semester,
            'matapelajaran_id'=>$request->matapelajaran,
            'tugas_1'=>$request->tugas1,
            'tugas_2'=>$request->tugas2,
            'tugas_3'=>$request->tugas3,
            'uts'=>$request->uts,
            'uas'=>$request->uas,       
            ]);
         return redirect('/nilai')->with('status', 'data berhasil diupdate!');
    }

    public function deletenilai($id)
    {
        $nilai=Nilai::FindOrFail($id);
        $nilai->delete();
        return redirect('/nilai')->with('status', 'data berhasil dihapus!');
    }

}