<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Guru;
use App\Models\Siswa;
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
        $admin=Admin::paginate();
        $guru=Guru::paginate();
        $siswa=Siswa::paginate();
        return view('home',[
            'Admin'=>$admin,
            'Guru'=>$guru,
            'Siswa'=>$siswa]);
    }
}
