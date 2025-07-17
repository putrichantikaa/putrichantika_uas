@extends('layouts.template')

@section('title')
    Halaman Data Obat
@endsection

@section('headline')
    DATA OBAT
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data Obat</div>

                <div class="card-body">
                    <form method="post" action="/obat" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="kd_obat" class="form-label">Kode Obat</label>
                            <input type="text" name="kd_obat" class="form-control" id="kd_obat" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="nama_obat" class="form-label">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" id="nama_obat">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_kadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                            <input type="date" name="tgl_kadaluarsa" class="form-control" id="tgl_kadaluarsa">
                        </div>

                        <div class="mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-control">
                                <option value="">-Pilih Satuan-</option>
                                <option value="tablet">Tablet</option>
                                <option value="botol">Botol</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
