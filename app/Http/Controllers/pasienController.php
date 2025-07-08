<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class pasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data dosen
        $nomor = 1;
        $pasien = Pasien::all();
        return view('pasien.index',compact('pasien','nomor'));
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
        //
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
