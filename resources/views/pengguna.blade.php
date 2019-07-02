<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengguna</title>
</head>
<body>
    @foreach($pengguna as $p)
    <tr>
        <td>{{ $p->nama }}</td>
        <td>{{$p->telephone->nomor_telepon}}</td>
        
    </tr>
    @endforeach
</body>
</html>