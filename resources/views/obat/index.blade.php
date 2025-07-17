@extends('layouts.template')

@section('title')
    Halaman Data Obat
@endsection

@section('headline')
    DATA OBAT
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="card col-11 px-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Data Obat</h3>
                <a class="btn btn-primary" href="/obat/tambah">
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
                                <th>Kode Obat</th>
                                <th>Nama Obat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obat as $data)
                                <tr>
                                    <th scope="row">{{ $nomor++ }}</th>
                                    <td>{{ $data->kd_obat }}</td>
                                    <td>{{ $data->nama_obat }}</td>
                                    <td>
                                        {{-- Detail --}}
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $data->id }}">
                                            <i class="fa fa-circle-info"></i>
                                        </button>

                                        <!-- Modal Detail -->
                                        <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $data->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{ $data->id }}">Detail Data Obat</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <tr><td>Kode Obat</td><td>: {{ $data->kd_obat }}</td></tr>
                                                            <tr><td>Nama Obat</td><td>: {{ $data->nama_obat }}</td></tr>
                                                            <tr><td>Tgl Kadaluarsa</td><td>: {{ $data->tgl_kadaluarsa }}</td></tr>
                                                            <tr><td>Satuan</td><td>: {{ $data->satuan }}</td></tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End of Detail --}}

                                        {{-- Edit --}}
                                        <a href="/obat/edit/{{ $data->id }}" class="btn btn-success btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        {{-- Hapus --}}
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- Modal Hapus -->
                                        <div class="modal fade" id="deleteModal{{ $data->id }}" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="deleteModalLabel">Peringatan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Yakin ingin menghapus data obat <strong>{{ $data->nama_obat }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form action="obat/{{ $data->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
