<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class resepController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data resep
        $nomor = 1;
        $resep = Resep::all();
        return view('resep.index',compact('resep','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $pasien = Pasien::all();
        return view('resep.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $resep = new Resep;
        $resep->no_resep = $request->no_resep;
        $resep->pasiens_id = $request->pasien;
        $resep->obats_id= $request->obat;
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
