<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
    <title>About</title>
</head>
<body>
    <font color="white">
    <h1 align="center">Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ asset('img') }}/Scaramouche.png" alt="Haru" width="200">

    </font>

</body>
</html>
