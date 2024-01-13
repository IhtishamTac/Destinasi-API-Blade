<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
    <title>Home Admin</title>
</head>

<body>
    @include('nav')
    <div class="container mt-5">
        <a href="/tambah" class="btn btn-success mb-5">
            Tambah Data
        </a>
        @if (Session::has('smessage'))
            <div class="alert alert-success">{{ Session::get('smessage') }}</div>
        @endif
        @if (Session::has('emessage'))
            <div class="alert alert-warning">{{ Session::get('emessage') }}</div>
        @endif
        <table class="table" id="tabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Link</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinasi as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ $d->foto }}" style="width: 100px;" alt=""></td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td><a href="{{ $d->link }}">Kunjungi</a></td>
                        <td>{{ $d->deskripsi }}</td>
                        <td>
                            <a href="{{ route('edit', $d->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('hapus', $d->id) }}" onclick="return confirm('Yakin akan menghapus?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="js/jquery-3.7.0.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#tabel');
    </script>
</body>

</html>
