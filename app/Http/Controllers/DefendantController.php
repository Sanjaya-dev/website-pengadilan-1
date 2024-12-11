<?php

namespace App\Http\Controllers;

use App\Models\CrimeType;
use App\Models\Defendant;
use Illuminate\Http\Request;

class DefendantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defendants = Defendant::all();
        return view('admin.page.defendants', compact('defendants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crimeTypes = CrimeType::all();
        return view('admin.page.add_defendants', compact('crimeTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Defendant::create([
            'name' => $request->name,
            'crime_type_id' => $request->crime_type_id,
            'peneliti' => $request->peneliti,
            'tanggal_SPDP' => $request->tanggal_SPDP,
            'tanggal_P17' => $request->tanggal_P17,
            'tanggal_tahap_1' => $request->tanggal_tahap_1,
            'tanggal_P18' => $request->tanggal_P18,
            'tanggal_P19' => $request->tanggal_P19,
            'tanggal_P20' => $request->tanggal_P20,
            'tanggal_P21' => $request->tanggal_P21,
            'tanggal_P21A' => $request->tanggal_P21A,
            'status' => $request->status
        ]);

        return redirect()->route('defendants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Defendant $defendant)
    {
        $crimeTypes = CrimeType::all();
        return view('admin.page.edit_defendants', compact('defendant', 'crimeTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Defendant $defendant)
    {
        $defendant->update([
            'name' => $request->name,
            'crime_type_id' => $request->crime_type_id,
            'peneliti' => $request->peneliti,
            'tanggal_SPDP' => $request->tanggal_SPDP,
            'tanggal_P17' => $request->tanggal_P17,
            'tanggal_tahap_1' => $request->tanggal_tahap_1,
            'tanggal_P18' => $request->tanggal_P18,
            'tanggal_P19' => $request->tanggal_P19,
            'tanggal_P20' => $request->tanggal_P20,
            'tanggal_P21' => $request->tanggal_P21,
            'tanggal_P21A' => $request->tanggal_P21A,
            'status' => $request->status
        ]);

        return redirect()->route('defendants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Defendant $defendant)
    {
        $defendant->delete();
        return redirect()->route('defendants');
    }
}
