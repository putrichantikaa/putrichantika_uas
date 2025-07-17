@extends('layouts.template')

@section('title')
    Halaman Data Resep
@endsection

@section('headline')
    DATA RESEP
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="card col-11 px-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Data Resep</h3>
                <a class="btn btn-primary" href="/resep/tambah">
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="row g-3">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Resep</th>
                                <th>Nama Pasien</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($resep as $data)
                                <tr>
                                    <th scope="row">{{ $nomor++ }}</th>
                                    <td>{{ $data->no_resep }}</td>
                                    <td>{{ optional($data->pasien)->nama_pasien }}</td>
                                    <td>
                                        {{-- Detail Button --}}
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $data->id }}">
                                            <i class="fa fa-circle-info"></i>
                                        </button>

                                        {{-- Modal Detail --}}
                                        <div class="modal fade" id="modalDetail{{ $data->id }}" tabindex="-1" aria-labelledby="modalDetailLabel{{ $data->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalDetailLabel{{ $data->id }}">Detail Data Resep</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Nomor Resep</td>
                                                                    <td>: {{ $data->no_resep }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nama Pasien</td>
                                                                    <td>: {{ optional($data->pasien)->nama_pasien }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nama Obat</td>
                                                                    <td>: {{ optional($data->obat)->nama_obat }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Diagnosa</td>
                                                                    <td>: {{ $data->diagnosa }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Detail --}}

                                        {{-- Edit Button --}}
                                        <a href="/resep/edit/{{ $data->id }}" class="btn btn-success btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        {{-- Delete Button --}}
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        {{-- Modal Delete --}}
                                        <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $data->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="deleteModalLabel">Peringatan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Yakin ingin menghapus data resep 
                                                        <strong>{{ $data->pasien?->nama_pasien ?? '-' }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form action="resep/{{ $data->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Delete --}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data tidak tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
