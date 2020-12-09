<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilairaport;
use App\Models\Nilai;


class NilairaportController extends Controller
{
    public function index()
    {   $nilai=Nilai::paginate();
        return view('/nilairaport.index',['Nilai'=>$nilai]);
    }
}
