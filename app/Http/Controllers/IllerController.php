<?php

namespace App\Http\Controllers;
use App\Models\Iller;
use Illuminate\Http\Request;

class IllerController extends Controller
{
    public function index(){
        $iller = Iller::all();
    return view('harita', ['iller' => $iller]); 
    }


}
