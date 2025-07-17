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
                    <form method="post" action="/resep/{{ $resep->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- No Resep -->
                        <div class="mb-3">
                            <label for="no_resep" class="form-label">Nomor Resep</label>
                            <input type="text" value="{{ $resep->no_resep }}" name="no_resep" class="form-control" id="no_resep" readonly>
                        </div>

                        <!-- Nama Pasien -->
                        <div class="mb-3">
                            <label for="pasiens_id">Nama Pasien</label>
                            <select name="pasiens_id" class="form-control" id="pasiens_id">
                                <option value="">- Pilih Nama Pasien -</option>
                                @foreach($pasiens as $p)
                                    <option value="{{ $p->id }}" {{ $resep->pasiens_id == $p->id ? 'selected' : '' }}>
                                        {{ $p->nama_pasien }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nama Obat -->
                        <div class="mb-3">
                            <label for="obats_id">Nama Obat</label>
                            <select name="obats_id" class="form-control" id="obats_id">
                                <option value="">- Pilih Nama Obat -</option>
                                @foreach($obats as $o)
                                    <option value="{{ $o->id }}" {{ $resep->obats_id == $o->id ? 'selected' : '' }}>
                                        {{ $o->nama_obat }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Diagnosa -->
                        <div class="mb-3">
                            <label for="diagnosa" class="form-label">Diagnosa</label>
                            <input type="text" value="{{ $resep->diagnosa }}" name="diagnosa" class="form-control" id="diagnosa">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
