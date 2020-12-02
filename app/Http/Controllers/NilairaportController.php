<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilairaport;

class NilairaportController extends Controller
{
    public function index()
    {
        return view('/nilairaport.index');
    }
}
