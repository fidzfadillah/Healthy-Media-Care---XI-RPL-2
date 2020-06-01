<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/login.css') }}">
    <style>
        /* body{
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
        } */
    </style>
</head>
<body>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Admin -  Login</h1>
            <hr>
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
            <form action="{{ url('/loginPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="alamat">Password:</label>
                    <input type="password" class="form-control" id="password" name="password"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Login</button>
                    <a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
</body>
</html>