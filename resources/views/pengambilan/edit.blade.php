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
                <div class="card-header">Form Edit Data Pengambilan Obat</div>

                <div class="card-body">
                    <form method="post" action="/pengambilan/{{ $pengambilan->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nomor Resep -->
                        <div class="mb-3">
                            <label for="reseps_id">Nomor Resep</label>
                            <select name="reseps_id" class="form-control">
                                <option value="">- Pilih Nomor Pasien -</option>
                                @foreach($reseps as $r)
                                    <option value="{{ $r->id }}" {{ $pengambilan->reseps_id == $r->id ? 'selected' : '' }}>
                                        {{ $r->no_resep }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nama Pasien -->
                        <div class="mb-3">
                            <label for="pasiens_id">Nama Pasien</label>
                            <select name="pasiens_id" class="form-control">
                                <option value="">- Pilih Pasien -</option>
                                @foreach($pasiens as $pasien)
                                    <option value="{{ $pasien->id }}" {{ $pengambilan->pasiens_id == $pasien->id ? 'selected' : '' }}>
                                        {{ $pasien->nama_pasien }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tanggal Pengambilan -->
                        <div class="mb-3">
                            <label for="tgl_ambil" class="form-label">Tgl Pengambilan</label>
                            <input type="date" value="{{ $pengambilan->tgl_ambil }}" name="tgl_ambil" class="form-control" id="tgl_ambil">
                        </div>

                        <!-- Keterangan -->
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <select name="keterangan" class="form-control">
                                <option value="">- Pilih Keterangan -</option>
                                <option value="Sudah Diambil" {{ $pengambilan->keterangan == 'Sudah Diambil' ? 'selected' : '' }}>
                                    Sudah Diambil
                                </option>
                                <option value="Belum Diambil" {{ $pengambilan->keterangan == 'Belum Diambil' ? 'selected' : '' }}>
                                    Belum Diambil
                                </option>
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
