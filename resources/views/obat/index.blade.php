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
          <i class="fa fa-user-plus"></i> Tambah Data
        </a>
      </div>
    </div>

    <div class="card-body">
      <div class="row g-3">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Tgl Kadaluarsa</th>
                <th>Satuan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               @forelse ($obat as $data)
                <tr>
                    <th scope="row">{{ $nomor++ }}</th>
                    <td>{{ $data->kd_obat }}</td>
                    <td>{{ $data->nama_obat }}</td>
                    <td>{{ $data->tgl_kadaluarsa }}</td>
                    <td>{{ $data->satuan }}</td>
                    
                    <td class="text-end">
                        <a href=/obat class="btn btn-warning btn-sm">
                            <i class="fa fa-circle-info"></i>
                        </a>
                        <a href="/obat/edit/{{ $data->id }}" class="btn btn-success btn-sm">
                            <i class="fa-solid fa-pen-to-square"></i> 
                        </a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fa-solid fa-folder-open"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deleteModalLabel">Peringatan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin ingin menghapus Data Obat <strong></strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ url('/obat/' . $data->id) }}" method="POST">
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
@endsection