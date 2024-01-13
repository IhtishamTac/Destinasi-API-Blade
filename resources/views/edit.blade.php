<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Ubah Data</title>
</head>
<body>
    <div class="container mt-5">
        <div class="col-7 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('postedit', $Destinasi->id) }}" method="POST" enctype="multipart/form-data" class="form-group">
                        @csrf
                        <h1 class="card-title">Ubah Data</h1>
                        <div class="mt-3">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" accept="image/*" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="{{ $Destinasi->nama }}" required class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="{{ $Destinasi->alamat }}" required class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="nama">Link</label>
                            <input type="text" name="link" value="{{ $Destinasi->link }}" required class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="nama">Deskripsi</label>
                            <input type="text" name="deskripsi" value="{{ $Destinasi->deskripsi }}" required class="form-control">
                        </div>
                        <div class="mt-3 mb-3">
                            <button class="btn btn-warning w-100">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
