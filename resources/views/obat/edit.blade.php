<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <title>Edit </title>
</head>
<body>
    <div class="container center col-6 ">
        <div class="card mt-4">
            <div class="card-header text-center">
                  <h2> Edit Data Obat </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/obat/{{ $obat->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                <div class="row g-3 ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Obat</label>
                        <input type="text" value="{{ $obat->kd_obat }}" name="kd_obat" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Obat</label>
                        <input type="text" value="{{ $obat->nama_obat }}" name="nama_obat" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tgl Kadaluarsa</label>
                        <input type="text" value="{{ $obat->tgl_kadaluarsa }}" name="tgl_kadaluarsa" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Satuan</label>
                            <select name="satuan" $id="" class="form-control">
                                <option value="{{$obat->satuan}}">{{$obat->satuan}}</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Botol">Botol</option>
                            </select>
                        </div>
                    <div class="text-end">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"> <a class="nav-link" href="/obat">  Tutup  </a> </button>
                        <button type="submit" class="btn btn-outline-secondary">Edit</button>
                    </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>