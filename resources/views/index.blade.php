<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coba crud</title>
</head>
<body>
    <h3>data karyawan</h3>
    <a href="pegawai/tambah">tambah data baru</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>nama</th> <th>jabatan</th> <th>umur</th> <th>alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $item)
        <tr>
            <td>{{$item->nama}}</td> <td>{{$item->jabatan}}</td> <td>{{$item->umur}}</td> <td>{{$item->alamat}}</td>
            <td>
                <a href="/pegawai/edit/{{$item->id}}">Edit</a> |
                <a href="/pegawai/hapus/{{$item->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>