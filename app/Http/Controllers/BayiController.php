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
        return view('bayi_ekle', compact('iller'));
    }

    public function store(Request $request)
    {
        Log::info('Store method called');
        $bayi = $request->validate([
            'firmaismi' => 'required|string',
            'il_id' => 'required|string',
            'baglioldugubayi' => 'required|string',
            'firmaadresi' => 'required|string',
            'firmatelefon' => 'required|string',
            'not' => 'required|string',
        ]);

        Bayiler::create($bayi);
        Log::info('Dealer created successfully');
        return redirect()->back()->with('success', 'Bayi başarıyla eklendi');
    }

    public function getBayiler($ilId)
    {
        try {
            $bayiler = Bayiler::where('il_id', $ilId)->get();
            return response()->json($bayiler);
        } catch (\Exception $e) {
            Log::error('Error fetching bayiler: ' . $e->getMessage());
            return response()->json(['error' => 'Error fetching data'], 500);
        }
    }
}
