<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('cssfile/mahasiswa.css')}}">
</head>


<body>
    <div class='header'>
        <h1 class='top-text'>Halaman Mahasiswa</h1>
        <ul class='nav-bar'>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ ('/profile') }}">Profile</a></li>
        </ul>
    </div>
    <div class='label'>
        <label class='label'>
            <span>Nama Mahasiswa</span>
            <input type="text" name="mahasiswa">
        </label>
        <br>
        <label class='label'>
            <span>NPM</span>
            <input type="number" name="username">
        </label>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>