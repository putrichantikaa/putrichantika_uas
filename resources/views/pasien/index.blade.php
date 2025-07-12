@extends('layouts.template')
@section('title')
    Halaman Data Pasien
@endsection

@section('headline')
    DATA PASIEN
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="card col-11 px-4">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Data Pasien</h3>
        <a class="btn btn-primary" href="/pasien/tambah">
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
                <th>NIK</th>
                <th>Nama Pasien</th>
                <th>No HP</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               @forelse ($pasien as $data)
                <tr>
                    <th scope="row">{{ $nomor++ }}</th>
                    <td>{{ $data->nik_pasien }}</td>
                    <td>{{ $data->nama_pasien }}</td>
                    <td>{{ $data->no_hp }}</td>
                    <td>
                         {{-- detail --}}
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $data->id }}">
                                            <i class="fa fa-circle-info"></i>
                                        </button>


                                        

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $data->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{ $data->id }}">Detail Data Pasien</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <tr><td>NIK</td><td>: {{ $data->nik_pasien }}</td></tr>
                                                            <tr><td>Nama</td><td>: {{ $data->nama_pasien }}</td></tr>
                                                            <tr><td>Tgl Lahir</td><td>: {{ $data->tgl_lahir }}</td></tr>
                                                            <tr><td>No HP</td><td>: {{ $data->no_hp }}</td></tr>
                                                            <tr><td>Alamat</td><td>: {{ $data->alamat }}</td></tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of detail --}}
                        <a href="/pasien/edit/{{ $data->id }}" class="btn btn-success btn-sm">
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
                                        Yakin ingin menghapus data pasien <strong></strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ url('/pasien/' . $data->id) }}" method="POST">
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