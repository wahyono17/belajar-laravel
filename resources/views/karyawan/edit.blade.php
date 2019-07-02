<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data</title>
</head>
<body>
    <a href="/karyawan">Kembali</a>
    <br>
    <br>
     
    <form action="/karyawan/update/{{$karyawan->id}}" method="post">
        {{ csrf_field() }}
       
       
        <input type="hidden" name="id" value="{{$karyawan->ID}}"><br>
        Nama <input type="text" required="required" name="nama" value="{{$karyawan->nama}}"><br>
        Alamat <textarea name="alamat" required="required">{{$karyawan->alamat}}</textarea><br>
        <input type="submit" value="Simpan">
    </form>
   
</body>
</html>