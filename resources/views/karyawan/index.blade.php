<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>coba crud</title>
</head>
<body>
<div class="container">   
    	<style type="text/css">
            .pagination li{
                float: left;
                list-style-type: none;
                margin:5px;    }
        </style>

    <h3>data karyawan</h3>
    <a href="karyawan/tambah">tambah data baru</a>
    <br>
    <br>
    <form action="/pegawai/cari" method="GET" class="form-inline">
		<input type="text" name="cari" placeholder="Cari karyawan .." value="{{ old('cari') }}" class="form-control">
		<input type="submit" value="CARI" class=" btn btn-primary ml-3">
    </form>
    <br>
    <table border="1">
        <tr>
            <th>nama</th> <th>jabatan</th> <th>umur</th> <th>alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $item)
        <tr>
            <td>{{$item->nama}}</td> <td>{{$item->alamat}}</td>
            <td>
                <a class="btn btn-sm" href="/karyawan/edit/{{$item->id}}">Edit</a> |
                <a class="btn btn-sm" href="/karyawan/hapus/{{$item->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    
</div>
</body>
</html>