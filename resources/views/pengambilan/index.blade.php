@extends('layouts.template')
@section('title')
    Halaman Data Pengambilan Obat
@endsection

@section('headline')
    DATA PENGAMBILAN OBAT
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="card col-11 px-4">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Data Pengambilan Obat</h3>
        <a class="btn btn-primary" href="/pengambilan/tambah">
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
                <th>Tgl Pengambilan</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               @forelse ($pengambilan as $data)
                <tr>
                    <th scope="row">{{ $nomor++ }}</th>
                    <td>{{optional ($data->resep)->no_resep }}</td>
                    <td>{{optional ($data->pasien)->nama_pasien }}</td>
                    <td>{{ $data->tgl_ambil }}</td>
                    <td>
                        <span class="label label-sm label-warning">{{ $data->keterangan }}</span>
                    </td>
                    <td>
                        
                        <a href="/pengambilan/edit/{{ $data->id }}" class="btn btn-success btn-sm">
                            <i class="fa-solid fa-pen-to-square"></i> 
                        </a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$data->id}}">
                            <i class="fa-solid fa-folder-open"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deleteModalLabel">Peringatan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin ingin menghapus data pengambilan obat <strong>{{ $data->pasien->nama_pasien }}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="pengambilan/{{$data->id}}" method="POST">
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