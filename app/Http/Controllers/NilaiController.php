<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Matapelajaran;

class NilaiController extends Controller
{
    public function index()
    {  $nilai= Nilai::paginate();
       $siswa= Siswa::all();
       $matapelajaran= Matapelajaran::all();
        return view('/nilai.index',[
            'Nilai'=>$nilai,
            'Siswa'=>$siswa,
            'Matapelajaran'=>$matapelajaran
            ]);
    }

    public function tambahnilai(Request $request)
    {   
        Nilai::Create([
        'id_siswa'=>$request->siswa,
        'semester'=>$request->semester,
        'id_matapelajaran'=>$request->matapelajaran,
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
        $siswa=Siswa::All();
        $matapelajaran=Matapelajaran::All();
        $nilai=Nilai::find($id);
      return view('/nilai.edit',[
          'Siswa' => $siswa,
          'Matapelajaran' => $matapelajaran,
          'Nilai' => $nilai,
          ]);
    }

    public function updatenilai(Request $request, $id)
    {
        $nilai=Nilai::FindOrFail($id);
        $nilai->update([
            'id_siswa'=>$request->siswa,
            'semester'=>$request->semester,
            'id_matapelajaran'=>$request->matapelajaran,
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