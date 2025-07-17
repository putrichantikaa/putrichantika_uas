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
                <div class="card-header">Form Tambah Data Resep</div>

                <div class="card-body">
                    <form method="post" action="/resep" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="no_resep" class="form-label">Nomor Resep</label>
                            <input type="text" name="no_resep" class="form-control" id="no_resep">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
                            <select name="pasiens_id" id="" class="form-control">
                                        <option value="">-Pilih Nama Pasien-</option>
                                        @foreach ($pasien as $p)
                                            <option value="{{$p->id}}">{{$p->nama_pasien}}</option>
                                        @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Obat</label>
                            <select name="obats_id" id="" class="form-control">
                                        <option value="">-Pilih Nama Obat-</option>
                                        @foreach ($obat as $o)
                                            <option value="{{$o->id}}">{{$o->nama_obat}}</option>
                                        @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="diagnosa" class="form-label">Diagnosa</label>
                            <input type="text" name="diagnosa" class="form-control" id="diagnosa">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
