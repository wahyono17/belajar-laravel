<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah data</title>
</head>
<body>
    <form action="/pegawai/post" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br>
        Jabatan <input type="text" name="jabatan" required="required"><br>
        Umur <input type="text" name="umur" required="required"><br>
        Alamat <textarea name="alamat" required="required"></textarea> <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>