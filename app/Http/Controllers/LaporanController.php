<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function indexlaporansiswa()
    {
        return view('/laporan.indexlaporansiswa');
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
