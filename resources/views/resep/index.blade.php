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
                <th>#</th>
                <th>No Resep</th>
                <th>ID Pasien</th>
                <th>ID Obat</th>
                <th>Diagnosa</th>
              </tr>
            </thead>
            <tbody>
               @forelse ($resep as $data)
                <tr>
                    <th scope="row">{{ $nomor++ }}</th>
                    <td>{{ $data->no_resep }}</td>
                    <td>{{$data->pasiens->id}}</td>
                    <td>{{$data->obats->id}}</td>
                    <td>{{ $data->diagnosa }}</td>
                    
                    <td class="text-end">
                        <a href=/resep class="btn btn-warning btn-sm">
                            <i class="fa fa-circle-info"></i>
                        </a>
                        <a href="/resep/edit/{{ $data->id }}" class="btn btn-success btn-sm">
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
                                        Yakin ingin menghapus data obat <strong></strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ url('/resep/' . $data->id) }}" method="POST">
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































{{-- @extends('layouts.template')

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
        
    @forelse ($resep as $data) --}}
      {{-- Card berada tepat di bawah judul --}}
      {{-- <div class="row">
        <div class="col-md-4"> Sesuaikan ukuran sesuai kebutuhan
          <div class="card shadow-sm bg-primary text-white">
            <img width="40" src="https://picsum.photos/2000" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-white">Resep</h5>
              <p class="card-text">No Resep: {{ $data->no_resep }}</p>
              <p class="card-text">Nama: {{ $data->pasiens_id }}</p>
              
              <a href="#" class="btn btn-warning">Detail</a>
            </div>
          </div>
        </div>
      </div>
       @empty
                <tr>
                    <td colspan="5" class="text-center">Data tidak tersedia.</td>
                </tr>
                @endforelse

    </div>
  </div>
</div>
@endsection --}}
