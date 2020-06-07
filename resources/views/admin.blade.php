<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('/assets/css/admin.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">

    <style>
        .logo{
            background: url("{{ asset('/assets/pict/logo.png') }}") no-repeat;
            background-size: contain;
            width: 20vh;
            height: 7vh;
            float: left;
            margin-left: 40px;
            padding: 0;
        }
    </style>
</head>
<body>
    <div id="navbar">
        <div class="logo"></div>
        <a class="btn">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <div class="menu">
            <a href="{{ url('/berita') }}">Berita</a>
            <a href="{{ url('/cc') }}">Call Center</a>
            <a href="{{ url('/rs') }}">Rumah Sakit</a>
            <a href="{{url('/logout')}}">Logout</a>
        </div>
    </div>
    <div class="container">
        <center>
            <h1>Halo, {{Session::get('name')}}.</h1>
            <h2>Anda telah Login dengan Email {{Session::get('email')}}</h2>
            <!-- <h2>Status Anda adalah {{Session::get('login')}}</h2> -->
            <h2>Apa yang ingin Anda lakukan?</h2>

            <div class="txt">
                <a href="{{ url('/berita/tambah') }}"><h3>Post Berita</h3></a>
                <a href="{{ url('/cc/tambah') }}"><h3>Tambah Data Call Center</h3></a>
                <a href="{{ url('/rs/tambah') }}"><h3>Tambah Data Rumah Sakit</h3></a>
            </div>
        </center>
    </div>
</body>
</html>