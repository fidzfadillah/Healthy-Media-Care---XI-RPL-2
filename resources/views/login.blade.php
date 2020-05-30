<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/login.css') }}">
    <style>
        body{
            background: url("{{ asset('/assets/pict/Background.png') }}");
            background-attachment: fixed;
            background-size: cover;
        }

        .box{
            background: url("{{ asset('/assets/pict/18.jpg') }}");
            background-size: cover;
            box-shadow: 0 0 5px #333;
        }

        @media screen and (max-width: 800px){
            body{
                background: #fff;
            }
        }
    </style>
</head>
<body>
	<a href="{{ url('/home') }}">
        <div class="back">
            Home
        </div>
    </a>
    <div class="box">
        <form action="" class="form-login">
            <h1>Login</h1>

            <div class="txt">
                <input type="text" name="username" placeholder="Username" autocomplete="off" class="user">
            </div>

            <div class="txt">
                <input type="text" name="password" placeholder="Password" autocomplete="off" class="pw">
            </div>

            <input type="submit" name="" class="logbtn" value="Login">
        </form>
    </div>

</body>
</html>