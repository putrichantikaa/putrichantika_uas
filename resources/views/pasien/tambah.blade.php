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
                <div class="card-header">Form Tambah Data Pasien</div>

                <div class="card-body">
                    <form method="post" action="/pasien" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nik_pasien" class="form-label">NIK</label>
                            <input type="text" name="nik_pasien" class="form-control" id="nik_pasien">
                        </div>

                        <div class="mb-3">
                            <label for="nama_pasien" class="form-label">Nama Pasien</label>
                            <input type="text" name="nama_pasien" class="form-control" id="nama_pasien">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
