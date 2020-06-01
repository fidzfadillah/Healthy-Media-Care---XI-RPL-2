<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Halo, {{Session::get('name')}}.</h2>
    <h3>Email kamu : {{Session::get('email')}}</h3>
    <h3>Status : {{Session::get('login')}}</h3>
    
    <h2><a href="{{ url('/berita') }}">admin berita</a></h2>
    <h2><a href="{{ url('/cc') }}">admin call center</a></h2>
    <h2><a href="{{ url('/rs') }}">admin rs rujuk</a></h2>

    <h2><a href="{{url('/logout')}}">Logout</a></h2>
</body>
</html>