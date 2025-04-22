<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:rgb(226, 240, 233);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }   
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Data Mahasiswa</h2>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-success text-center">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="/logout" class="btn btn-success">Logout</a>
        </div>
    </div>
</body>
</html>
