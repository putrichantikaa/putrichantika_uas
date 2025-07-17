@extends('layouts.template')

@section('title')
    Halaman Data Pengambilan Obat
@endsection

@section('headline')
    DATA PENGAMBILAN OBAT
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Pengambilan Obat</div>

                <div class="card-body">
                    <form method="POST" action="/pengambilan" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label">Nomor Resep</label>
                            <select name="reseps_id" class="form-control">
                                <option value="">-Pilih Nomor Resep-</option>
                                @foreach ($resep as $r)
                                    <option value="{{ $r->id }}">{{ $r->no_resep }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Pasien</label>
                            <select name="pasiens_id" class="form-control">
                                <option value="">-Pilih Nama Pasien-</option>
                                @foreach ($pasien as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_pasien }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Pengambilan</label>
                            <input type="date" name="tgl_ambil" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <select name="keterangan" class="form-control">
                                <option value="">-Pilih Keterangan-</option>
                                <option value="Sudah Diambil">Sudah Diambil</option>
                                <option value="Belum Diambil">Belum Diambil</option>
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
