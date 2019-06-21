<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nelajar laravel</title>
</head>
<body>
    <header>
        <h2>blog IT Busanaremaja</h2>
        <nav>
            <a href="/blog">Blog</a>|
            <a href="/blog/tentang">Tentang</a>|
            <a href="/blog/kontak">Kontak</a>
        </nav>
    </header>
    <hr>
    <br>
    <br>
    <!-- judul blog -->
    <h3>@yield('judul halaman')</h3>

    <!-- bagian konten -->
    @yield('konten')
    <br>
    <br>
    <hr>
    
</body>
</html>