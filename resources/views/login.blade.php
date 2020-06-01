<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/log.css') }}">
    <style>
        body{
            background: url("{{ asset('/assets/pict/Background.png') }}");
            background-size: cover;
            background-attachment: fixed;
        }

        .box{
            background: url("{{asset('/assets/pict/18.jpg')}}");
            background-size: cover;
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
        @if(\Session::has('alert'))
            <div class="alert alert-danger">
                <div>{{Session::get('alert')}}</div>
            </div>
        @endif
        @if(\Session::has('alert-success'))
            <div class="alert alert-success">
                <div>{{Session::get('alert-success')}}</div>
            </div>
        @endif
           <div class="form-login">
           
           <form action="{{ url('/loginPost') }}" method="post">
                {{ csrf_field() }}
                <h1>Login</h1>
                <div class="txt">
                    <input type="email" id="email" name="email" placeholder="Enter your Email">
                </div>
                <div class="txt">
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="btnn">
                    <button type="submit">Login</button>
                    <a href="{{url('/register')}}" style="margin-top: 1vh; text-decoration: none; color: rgb(255, 59, 134); height: 5vh;">Register</a>
                </div>
            </form>
           </div>
        </div>
    </div>
</body>
</html>