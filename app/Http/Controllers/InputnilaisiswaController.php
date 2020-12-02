<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inputnilaisiswa;

class InputnilaisiswaController extends Controller
{
    public function index()
    {
        return view('/inputnilaisiswa.index');
    }
}
