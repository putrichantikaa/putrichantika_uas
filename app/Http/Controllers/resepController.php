<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\Pasien; 
use App\Models\Obat; 

class ResepController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $resep = Resep::all();
        return view('resep.index', compact('resep', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = Pasien::all();
        $obat = Obat::all();
        $resep = Resep::all();
        return view('resep.tambah', compact('pasien', 'obat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $resep = new Resep;
        $resep->no_resep = $request->no_resep;
        $resep->nama_pasien = $request->nama_pasien;
        $resep->pasiens_id = $request->pasien;
        $resep->obats_id = $request->obat;
        $resep->diagnosa = $request->diagnosa;

        $resep->save();

        return redirect('/resep');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $resep = Resep::findOrFail($id);
    $pasiens = Pasien::all();
    $obats = Obat::all();

    return view('resep.edit', compact('resep', 'pasiens', 'obats'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'no_resep' => 'required',
        'pasiens_id' => 'required',
        'obats_id' => 'required',
        'diagnosa' => 'required'
    ]);

    $resep = Resep::findOrFail($id);
    $resep->no_resep = $request->no_resep;
    $resep->pasiens_id = $request->pasiens_id;
    $resep->obats_id = $request->obats_id;
    $resep->diagnosa = $request->diagnosa;
    $resep->save();

    return redirect('/resep')->with('success', 'Resep berhasil diupdate.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resep = Resep::find($id);
        $resep->delete();

        return redirect('/resep');
    }
}
