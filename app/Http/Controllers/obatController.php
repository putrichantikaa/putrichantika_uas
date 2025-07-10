<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class obatController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data obat
        $nomor = 1;
        $obat = Obat::all();
        return view('obat.index',compact('obat','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // menampilkan form tambah
        return view('obat.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses tambah
        $obat = new Obat;
        $obat->kd_obat = $request->kd_obat;
        $obat->nama_obat = $request->nama_obat;
        $obat->tgl_kadaluarsa = $request->tgl_kadaluarsa;
        $obat->satuan = $request->satuan;
        $obat->save();

        return redirect('/obat');
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
        $obat = Obat::find($id);
        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses edit
        $obat = Obat::find($id);
        $obat->kd_obat = $request->kd_obat;
        $obat->nama_obat = $request->nama_obat;
        $obat->tgl_kadaluarsa = $request->tgl_kadaluarsa;
        $obat->satuan = $request->satuan;
        $obat->save();


        return redirect('/obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obat = Obat::find($id);
        $obat->delete();
        return redirect('/obat');
    }
}
