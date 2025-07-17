@extends('layouts.template')

@section('title')
    Halaman Dashboard
@endsection

@section('headline')
    Dashboard
@endsection

@section('content')
    {{-- Section Ucapan Selamat --}}
    <div class="card mb-4 border-0 shadow-sm" style="background-color: #f5f7fb;">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="text-primary fw-bold">🎉 Hello Admin!</h5>
                <p class="mb-2"><strong>Selamat datang kembali! </strong> Semoga hari ini penuh produktivitas dan keberhasilan.</p>
            </div>
            <div>
                <img src="https://img.freepik.com/free-vector/working-concept-illustration_114360-2143.jpg?w=740" alt="Person with laptop" width="120">
            </div>
        </div>
    </div>

    {{-- Section Cards: Profit & Sales --}}
    <div class="d-flex justify-content-center">
    <div class="row w-100 justify-content-center">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-start border-danger border-4 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted fw-bold">Data Pasien</h6>
                    <h3 class="mb-1 text-primary">3</h3>
                    <span class="text-success"><i class="fas fa-arrow-up"></i> Completed</span>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="/pasien" class="btn btn-sm btn-primary">
                            <i class="fas fa-info-circle me-1"></i> Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-3">
            <div class="card border-start border-warning border-4 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted fw-bold">Data Obat</h6>
                    <h3 class="mb-1 text-danger">5</h3>
                    <span class="text-success"><i class="fas fa-arrow-up"></i> Completed</span>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="/obat" class="btn btn-sm btn-success">
                            <i class="fas fa-info-circle me-1"></i> Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-3">
            <div class="card border-start border-success border-4 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted fw-bold">Data Resep</h6>
                    <h3 class="mb-1 text-warning">3</h3>
                    <span class="text-success"><i class="fas fa-arrow-up"></i> Completed</span>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="/resep" class="btn btn-sm btn-warning">
                            <i class="fas fa-info-circle me-1"></i> Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-start border-primary border-4 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted fw-bold">Data Pengambilan Obat</h6>
                    <h3 class="mb-1 text-success">3</h3>
                    <span class="text-success"><i class="fas fa-arrow-up"></i> Completed</span>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="/pengambilan" class="btn btn-sm btn-danger">
                            <i class="fas fa-info-circle me-1"></i> Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
