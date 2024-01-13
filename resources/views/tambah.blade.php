<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Tambah Data</title>
</head>
<body>
    <div class="container mt-5">
        <div class="col-7 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('posttambah') }}" method="POST" enctype="multipart/form-data" class="form-group">
                        @csrf
                        <h1 class="card-title">Tambah Data</h1>
                        <div class="mt-3">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" accept="image/*" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="nama">Link</label>
                            <input type="text" name="link" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="nama">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                        </div>
                        <div class="mt-3 mb-3">
                            <button class="btn btn-success w-100">Tambahkan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
