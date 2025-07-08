@extends('layouts.template')
@section('title')
    Halaman Data Pasien
@endsection

@section('headline')
    DATA PASIEN
@endsection

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="card col-md-10 mx-auto">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <h3 class="mb-0">Data Pasien</h3>
          <a class="btn btn-primary" href="jadwal/add">
            <i class="fa fa-user-plus"></i> Tambah Data
          </a>
        </div>
      </div>

      <div class="card-body">
        <div class="row g-3">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Tgl Lahir</th>
                <th scope="col">NO HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>12345</td>
                <td>PC</td>
                <td>03 Agustus 2005</td>
                <td>08124736</td>
                <td>Keutapang</td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary me-1">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
    
        
    