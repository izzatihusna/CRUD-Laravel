<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data mahasiswa</title>
    </head>
    <body style="background-image: url(../assets/img/bg.jpg);">

        <div class="container">
            <div  class="card mt-5">
                <div style = "background-color: Olive" class="card-header text-center">
                    CRUD Data Mahasiswa
                </div>
                <div class="card-body">
                    <a href="/mahasiswa/tambah" class="btn btn-secondary">Input mahasiswa Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Dosen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $p)
                            <tr>
                                <td>{{ $p->Nama }}</td>
                                <td>{{ $p->NIM }}</td>
                                <td>{{ $p->JenisKelamin }}</td>
                                <td>{{ $p->NamaDosen }}</td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $p->id }}" class="btn btn-info">Edit</a>
                                    <a href="/mahasiswa/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>