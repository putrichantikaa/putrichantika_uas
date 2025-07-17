<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\Pasien; 
use App\Models\Obat; 
use App\Models\Pengambilan;

class PengambilanController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pengambilan = Pengambilan::with(['resep', 'pasien'])->get();
        return view('pengambilan.index', compact('pengambilan', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $resep = Resep::all();
        $pasien = Pasien::all();
        $pengambilan = Pengambilan::all();
        return view('pengambilan.tambah', compact('resep', 'pasien'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengambilan = new Pengambilan;
        $pengambilan->reseps_id = $request->reseps_id;
        $pengambilan->pasiens_id = $request->pasiens_id;
        $pengambilan->tgl_ambil = $request->tgl_ambil;
        $pengambilan->keterangan = $request->keterangan;

        $pengambilan->save();

        return redirect('/pengambilan');
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
    $pengambilan = Pengambilan::findOrFail($id);
    $reseps = Resep::all();
    $pasiens = Pasien::all();

    return view('pengambilan.edit', compact('pengambilan', 'reseps', 'pasiens'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'reseps_id' => 'required',
        'pasiens_id' => 'required',
        'tgl_ambil' => 'required',
        'keterangan' => 'required'
    ]);

    $pengambilan = Pengambilan::findOrFail($id);
    $pengambilan->reseps_id = $request->reseps_id;
    $pengambilan->pasiens_id = $request->pasiens_id;
    $pengambilan->tgl_ambil = $request->tgl_ambil;
    $pengambilan->keterangan = $request->keterangan;
    $pengambilan->save();

    return redirect('/pengambilan')->with('success', 'Pengambilan Obat berhasil diupdate.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengambilan = Pengambilan::find($id);
        $pengambilan->delete();

        return redirect('/pengambilan');
    }
}
