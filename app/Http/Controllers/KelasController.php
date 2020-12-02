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
}
