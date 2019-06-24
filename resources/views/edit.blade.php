<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data</title>
</head>
<body>
    <a href="/pegawai">Kembali</a>
    <br>
    <br>
    @foreach ($karyawan as $item)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$item->id}}"><br>
        Nama <input type="text" required="required" name="nama" value="{{$item->nama}}"><br>
        Jabatan <input type="text" required="required" name="jabatan" value="{{$item->jabatan}}"><br>
        Umur <input type="text" required="required" name="umur" value="{{$item->umur}}"><br>
        Alamat <textarea name="alamat" required="required">{{$item->alamat}}</textarea><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach
    
</body>
</html>