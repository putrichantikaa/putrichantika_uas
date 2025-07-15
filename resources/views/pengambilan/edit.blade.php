@extends('layouts.template')
@section('title')
    Halaman Data Obat
@endsection

@section('headline')
    DATA OBAT
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data Obat</div>

                <div class="card-body">
                    <form method="post" action="/pengambilan" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Pasien</label>
                        <input type="text" value="{{ $data->pasien->nama_pasien }}" name="kd_obat" class="form-control" id="exampleInputEmail1" readonly>
                    </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
                        <input type="text" value="{{ $data->pasien->nama_pasien }}" name="nama_obat" class="form-control" id="exampleInputEmail1">
                    </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tgl Pengambilan</label>
                        <input type="text" value="{{ $obat->tgl_kadaluarsa }}" name="tgl_kadaluarsa" class="form-control" id="exampleInputEmail1">
                    </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                            <select name="satuan" $id="" class="form-control">
                                <option value="{{$obat->satuan}}">{{$obat->satuan}}</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Botol">Botol</option>
                            </select>
                        </div>


                         <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



