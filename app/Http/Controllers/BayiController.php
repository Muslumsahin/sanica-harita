<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayiler;
use App\Models\Iller;

class BayiController extends Controller
{
    public function index()
    {
        $iller = Iller::all();
        return view('bayi_ekle')->with('iller', $iller);
    }
}

