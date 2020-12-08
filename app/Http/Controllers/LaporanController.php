<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Matapelajaran;
class LaporanController extends Controller
{
    public function indexlaporansiswa()
    {
        $siswa=Siswa::paginate(10);
        return view('/laporan.indexlaporansiswa', ['Siswa'=>$siswa]);
    }

    public function indexlaporanguru()
    {   $guru=Guru::paginate(10);
        return view('/laporan.indexlaporanguru',['Guru'=>$guru]);
    }

    public function indexlaporankelas()
    {   $kelas=Kelas::paginate(10);
        return view('/laporan.indexlaporankelas',['Kelas'=>$kelas]);
    }

    public function indexlaporannilai()
    {   $nilai=Nilai::paginate(10);
        return view('/laporan.indexlaporannilai',['Nilai'=>$nilai]);
    }

    public function indexlaporanpelajaran()
    {   $matapelajaran=Matapelajaran::paginate(10);
        return view('/laporan.indexlaporanpelajaran',['Matapelajaran'=>$matapelajaran]);
    }
}
