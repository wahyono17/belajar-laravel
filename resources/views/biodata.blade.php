<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>biodata laravel</title>
</head>
<body>
    <h1>test view from controller</h1>
    <p>nama {{$nama}}</p>
    
    <p>pekerjaan</p>
    <ul>
    @foreach($pekerjaan as $kerja)
        <li>{{$kerja}}</li>
    @endforeach    
    </ul>
    
        
    

    
</body>
</html>