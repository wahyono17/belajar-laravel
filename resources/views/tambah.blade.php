<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah data</title>
</head>
<body>
    {{-- menampilkan error validasi --}}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/pegawai/post" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required" value="{{old('nama')}}"> 
        <br>
        Jabatan <input type="text" name="jabatan" required="required" value="{{old('jabatan')}}"><br>
        Umur <input type="text" name="umur" required="required" value="{{old('umur')}}"><br>
        Alamat <textarea name="alamat" required="required"></textarea> <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>