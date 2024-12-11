<?php

namespace App\Http\Controllers;

use App\Models\Defendant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       $dataKasus = Defendant::all();
       $totalKasusPraPenuntutan = Defendant::where('status', 'pra-penuntutan')->count();
       $totalKasusPenuntutan = Defendant::where('status', 'penuntutan')->count();
       return view('data', compact('dataKasus','totalKasusPraPenuntutan','totalKasusPenuntutan')); 
    }

    public function getFilteredData(Request $request)
    {
       $data = Defendant::join('crime_types', 'defendants.crime_type_id', '=', 'crime_types.id')
            ->select('crime_types.name as crime_type', \DB::raw('count(defendants.id) as total'))
            ->groupBy('crime_types.name')
            ->get();

        return response()->json($data);
    }
}
