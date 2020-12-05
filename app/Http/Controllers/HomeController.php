<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Matapelajaran;
use App\Models\Kelas;
use App\Models\Kelassiswa;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        User::all();
        $user=User::paginate();
        $guru=Guru::paginate();
        $siswa=Siswa::paginate();
        $matapelajaran=Matapelajaran::paginate();
        $kelas=Kelas::paginate();
        $kelassiswa=Kelassiswa::paginate();
        return view('home',[
            'User'=>$user,
            'Guru'=>$guru,
            'Siswa'=>$siswa,
            'Matapelajaran'=>$matapelajaran,
            'Kelas'=>$kelas,
            'Kelassiswa'=>$kelassiswa,
            ]);
    }
}
