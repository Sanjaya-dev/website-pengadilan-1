<?php

namespace App\Http\Controllers;

use App\Models\CrimeType;
use Illuminate\Http\Request;

class CrimeTypeController extends Controller
{
    public function index()
    {
        $crimeTypes = CrimeType::all();
        return view('admin.page.crime_type',[
            'crimeTypes' => $crimeTypes
        ]);
    }

    public function create()
    {
        return view('admin.page.add_crime_type');
    }

    public function store(Request $request)
    {
        CrimeType::create([
            'name' => $request->name
        ]);

        return redirect()->route('crimeType');
    }

    public function edit(CrimeType $crimeType)
    {
        // dd($crimeType->name);

        return view('admin.page.edit_crime_type',[
            'crimeTypes' => $crimeType
        ]);
    }

    public function update(Request $request, CrimeType $crimeType)
    {
        $crimeType->update([
            'name' => $request->name
        ]);

        return redirect()->route('crimeType');
    }

    public function destroy(CrimeType $crimeType)
    {

        // Cek apakah crime_type digunakan di tabel defendants
        if ($crimeType->defendants()->exists()) {
            // Redirect kembali dengan pesan alert
            return redirect()->back()->with('error', 'Data crime type '.$crimeType->name.' are being used on table defendants and cannot be removed.');
        }

        $crimeType->delete();
        return redirect()->route('crimeType');
    }
}
