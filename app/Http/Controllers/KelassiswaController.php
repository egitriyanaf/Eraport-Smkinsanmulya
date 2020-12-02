<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kelassiswa;

class KelassiswaController extends Controller
{
    public function index()
    {
        return view('kelassiswa.index');
    }
}
