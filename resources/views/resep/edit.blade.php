@extends('layouts.template')
@section('title')
    Halaman Data Resep
@endsection

@section('headline')
    DATA RESEP
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data Resep</div>

                <div class="card-body">
                    <form method="POST" action="/resep/{{ $resep->id }}">
                        @csrf
                        @method('PUT')

                        <!-- No Resep -->
                        <div class="mb-3">
                            <label for="no_resep">No Resep</label>
                            <input type="text" name="no_resep" class="form-control" value="{{ $resep->no_resep }}">
                        </div>

                        <!-- Nama Pasien -->
                        <div class="mb-3">
                            <label for="pasiens_id">Nama Pasien</label>
                            <select name="pasiens_id" class="form-control">
                                <option value="">- Pilih Pasien -</option>
                                @foreach($pasiens as $pasien)
                                    <option value="{{ $pasien->id }}" {{ $resep->pasiens_id == $pasien->id ? 'selected' : '' }}>
                                        {{ $pasien->nama_pasien }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nama Obat -->
                        <div class="mb-3">
                            <label for="obats_id">Nama Obat</label>
                            <select name="obats_id" class="form-control">
                                <option value="">- Pilih Obat -</option>
                                @foreach($obats as $obat)
                                    <option value="{{ $obat->id }}" {{ $resep->obats_id == $obat->id ? 'selected' : '' }}>
                                        {{ $obat->nama_obat }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Diagnosa -->
                        <div class="mb-3">
                            <label for="diagnosa">Diagnosa</label>
                            <input type="text" name="diagnosa" class="form-control" value="{{ $resep->diagnosa }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
