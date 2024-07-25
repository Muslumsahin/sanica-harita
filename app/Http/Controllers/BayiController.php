<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayiler;
use App\Models\Iller;
use Illuminate\Support\Facades\Log;

class BayiController extends Controller
{
    public function index()
    {
        $iller = Iller::all();
        return view('bayi_ekle')->with('iller', $iller);
    }

    public function store(Request $request)
    {

        Log::info('Store method called');
        $bayi = $request->validate([
            'firmaismi' => 'required|string',
            'il_id' => 'required',
        ]);

        Bayiler::create([
            'firmaismi' => $request->firmaismi,
            'il_id' => $request->il_id,
        ]);
        Log::info('Dealer created successfully');
        return redirect()->back()->with('success', 'Bayi başarıyla eklendi');
    }
}

