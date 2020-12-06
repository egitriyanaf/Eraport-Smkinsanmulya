<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class LaporanController extends Controller
{
    public function indexlaporansiswa()
    {
        $siswa=Siswa::paginate(10);
        return view('/laporan.indexlaporansiswa', ['Siswa'=>$siswa]);
    }

    public function indexlaporanguru()
    {
        return view('/laporan.indexlaporanguru');
    }

    public function indexlaporankelas()
    {
        return view('/laporan.indexlaporankelas');
    }

    public function indexlaporannilai()
    {
        return view('/laporan.indexlaporannilai');
    }

    public function indexlaporanpelajaran()
    {
        return view('/laporan.indexlaporanpelajaran');
    }
}
