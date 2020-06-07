<!DOCTYPE html>
<html>
<head>
    <title>Berita (Admin)</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/css/data.css')}}">

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
    
    <center>
        <div class="tab">
            <h1>Data Berita</h1>
            <table border="1" cellpadding="7" cellspacing="2">
                <thead>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Tanggal</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                @foreach ($berita as $row)
                    <tr>
                        <td>{{ isset($i) ? ++$i : $i = 1}}</td>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->isi }}</td>
                        <td><a href="{{ url('/berita/' . $row->id . '/edit') }}">Edit</a>
            <form action="{{ url('/berita', $row->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ url('/berita/tambah') }}"><button>+ Tambah Data</button></a>
    </center>
</body>
</html>