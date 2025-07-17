<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\Pasien;
use App\Models\Obat;
use App\Models\Pengambilan;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data pasien
        $nomor = 1;
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
        return view('pasien.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $pasien = new Pasien;
        $pasien->nik_pasien = $request->nik_pasien;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->no_hp = $request->no_hp;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return redirect('/pasien');
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
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $pasien = Pasien::find($id);
        $pasien->nik_pasien = $request->nik_pasien;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->no_hp = $request->no_hp;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/pasien');
    }
}
