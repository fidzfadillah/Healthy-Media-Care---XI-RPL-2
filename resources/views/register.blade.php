<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('/assets/css/log.css')}}">

    <style>
        body{
            background: url("{{ asset('/assets/pict/Background.png') }}");
            background-size: cover;
            background-attachment: fixed;
        }

        .box{
            background: url("{{asset('/assets/pict/18.jpg')}}");
            background-size: cover;
            height: 65vh;
        }

        .form-login{
            padding: 5vh 10vh;
        }

        .txt{
            margin: 10px 0;
        }

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
            <a href="{{url('/home#kasus')}}">Data</a>
            <a href="{{ url('/news') }}">Berita</a>
            <a href="{{ url('/kontak') }}">Call Center & RS Rujukan</a>
            <a href="https://www.halodoc.com/layanan-rapid-test">Rapid Test Drivethru</a>
        </div>
    </div>
    <div class="container">
       
        <div class="box">
            @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-login">
            <form action="{{ url('/registerPost') }}" method="post">
                {{ csrf_field() }}
                <br><h1>Register</h1><br>
                <div class="txt">
                    <input type="email" id="email" name="email" placeholder="Enter your Email">
                </div>
                <div class="txt">
                    <input type="password" id="password" name="password" placeholder="Enter your Password">
                </div>
                <div class="txt">
                    <input type="password" id="confirmation" name="confirmation" placeholder="Confirm Password">
                </div>
                <div class="txt">
                    <input type="text" id="name" name="name" placeholder="Enter your Username">
                </div><br>
                <div class="btnn">
                    <button type="submit">Submit</button>
                    <button type="reset" onclick="history.back(-1)">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- <a href="{{url('/home')}}">Home</a> -->
</body>
</html>