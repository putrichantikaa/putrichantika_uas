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
                <div class="card-header">Form Edit Data Obat</div>

                <div class="card-body">
                    <form method="post" action="/obat/{{ $obat->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="kd_obat" class="form-label">Kode Obat</label>
                            <input type="text" value="{{ $obat->kd_obat }}" name="kd_obat" class="form-control" id="kd_obat" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="nama_obat" class="form-label">Nama Obat</label>
                            <input type="text" value="{{ $obat->nama_obat }}" name="nama_obat" class="form-control" id="nama_obat">
                        </div>

                        <div class="mb-3">
                            <label for="tgl_kadaluarsa" class="form-label">Tgl Kadaluarsa</label>
                            <input type="date" value="{{ $obat->tgl_kadaluarsa }}" name="tgl_kadaluarsa" class="form-control" id="tgl_kadaluarsa">
                        </div>

                        <div class="mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-control">
                                <option value="{{ $obat->satuan }}">{{ $obat->satuan }}</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Botol">Botol</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
