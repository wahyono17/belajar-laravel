<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nama</title>
</head>
<body>
    @foreach ($nama as $item)
        <ul>
            <li>{{$item->nama}}</li>
            <li>{{$item->passport->number}}</li>
        </ul>
    @endforeach
</body>
</html>