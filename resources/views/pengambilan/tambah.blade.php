@extends('layouts.template')
@section('title')
    Halaman Data Pengambilan Obat
@endsection

@section('headline')
    DATA PENGAMBILAN OBAT
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Pengambilan Obat</div>

                <div class="card-body">
                    <form method="post" action="/pengambilan" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nomor Resep</label>
                            <select name="reseps_id" id="" class="form-control">
                                        <option value="">-Pilih Nomor Resep-</option>
                                        @foreach ($resep as $r)
                                            <option value="{{$r->id}}">{{$r->no_resep}}</option>
                                        @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Pasien</label>
                            <select name="pasiens_id" id="" class="form-control">
                                        <option value="">-Pilih Nama Pasien-</option>
                                        @foreach ($pasien as $p)
                                            <option value="{{$p->id}}">{{$p->nama_pasien}}</option>
                                        @endforeach

                                    </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Pengambilan</label>
                            <input type="date" name="tgl_ambil" class="form-control" id="exampleInputPassword1">
                        </div>
                         <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                                    <select name="keterangan" id="" class="form-control">
                                        <option value="">-Pilih Keterangan-</option>
                                        <option value="Sudah Diambil">Sudah Diambil</option>
                                        <option value="Belum Diambil">Belum Diambil</option>
                                        {{-- @foreach ($pengajuan as $item2)
                                            <option value="{{$item2->id}}">{{$item2->nim_mahasiswa}}</option>
                                        @endforeach --}}

                                    </select>
                                </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection