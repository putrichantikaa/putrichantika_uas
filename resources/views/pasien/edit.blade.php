@extends('layouts.template')

@section('title')
    Halaman Data Pasien
@endsection

@section('headline')
    DATA PASIEN
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data Pasien</div>

                <div class="card-body">
                    <form method="POST" action="/pasien/{{ $pasien->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nik_pasien" class="form-label">NIK</label>
                            <input type="text" value="{{ $pasien->nik_pasien }}" name="nik_pasien" class="form-control" id="nik_pasien" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="nama_pasien" class="form-label">Nama Pasien</label>
                            <input type="text" value="{{ $pasien->nama_pasien }}" name="nama_pasien" class="form-control" id="nama_pasien">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" value="{{ $pasien->tgl_lahir }}" name="tgl_lahir" class="form-control" id="tgl_lahir">
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="text" value="{{ $pasien->no_hp }}" name="no_hp" class="form-control" id="no_hp">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" value="{{ $pasien->alamat }}" name="alamat" class="form-control" id="alamat">
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
