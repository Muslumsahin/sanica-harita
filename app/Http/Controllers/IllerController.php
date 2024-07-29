<?php

namespace App\Http\Controllers;
use App\Models\Iller;
use App\Models\Bayiler;

use Illuminate\Http\Request;

class IllerController extends Controller
{
    public function index(){
        $bayiler = Bayiler::all();
        $iller = Iller::all();
    return view('harita', ['bayiler' => $bayiler, 'iller' => $iller]); 
    }


}
