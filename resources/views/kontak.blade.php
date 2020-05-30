<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/assets/css/kontak.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ff74694b5e.js" crossorigin="anonymous"></script>
    <style>
        body{
            background: url("{{ asset('/assets/pict/Background.png') }}");
            background-attachment: fixed;
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

        .scroll{
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 10px 0 #dfdfdf;
        }

        .trans{
            background: rgba(255, 255, 255, 0.9);
        }

        @media screen and (max-width: 800px){
            .logo{
                margin-left: 20px;
                height: 35px;
            }
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
            <a href="{{ url('/berita') }}">Berita</a>
            <a href="https://www.halodoc.com/layanan-rapid-test">Rapid Test Drivethru</a>
            <a href="{{ url('/login') }}" id="adm-log">Login Admin</a>
        </div>
    </div>

    <div class="container">
        <div class="title">
            <h1>Rumah Sakit Rujukan</h1>
        </div>
        <div class="tools">
            <input type="text" name="cari" id="cari" placeholder="Cari Kabupaten atau Kota">&emsp;
            <input type="submit" value="Cari">&emsp;
            <a href="{{ url('/kontak') }}"><button>Refresh</button></a>&emsp;
            <a href="https://api.whatsapp.com/send?phone=6285697391854&text=Halo%20Admin%21%20Saya%20ingin%20tanya%20seputar%20PIKOBAR&source=&data=&app_absent="><div class="wa">Whatsapp</div></a>
        </div>
        <div class="rs-box">
            
            <div class="rs-con">
                @foreach ($rs_rujukan as $raw)
                <div class="rs-con-box">
                    <h2>{{ $raw->nama_rs }}</h2>
                    <p>{{ $raw->alamat }}</p>
                    <div class="rs-con-box-in">
                        <div class="rs-con-box2">{{ $raw->no_telp }}</div>
                        <div class="rs-con-box2">{{ $raw->halaman_web }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 0;">
        <div class="title">
            <h1>Call Center</h1>
        </div>
        <!-- <div class="tools">
            <input type="text" name="cari" id="cari" placeholder="Cari Kabupaten atau Kota">&emsp;
            <input type="submit" value="Cari">&emsp;
            <a href="{{ url('/berita') }}"><button>Refresh</button></a>&emsp;
            <a href=""><div class="wa">Whatsapp</div></a>
        </div> -->
        <div class="rs-box">
            <div class="rs-con">
                @foreach ($call_center as $row)
                <div class="rs-con-box">
                    <h2>{{ $row->nama_kota }}</h2>
                    <div class="rs-con-box-in">
                        <div class="rs-con-box2">{{ $row->call_center }}</div>
                        <div class="rs-con-box2">{{ $row->hotline }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <button id="btnTop"><i class="fas fa-arrow-up"></i></button>

    <script>
        $(".btn").on("click",function(){
            $('.menu').toggleClass("show");
            document.getElementById("navbar").className = "trans";
        });

        window.onscroll = function() {scrollfunction()};
        
        function scrollfunction() {
            if(document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
                document.getElementById("navbar").className = "scroll";
                $('#btnTop').fadeIn();
            } else {
                document.getElementById("navbar").className = "";
                $('#btnTop').fadeOut();
            }
        }

        //button scroll to top
        $("#btnTop").click(function() {
            $('html, body').animate({scrollTop : 0}, 1000);
        });
    </script>

</body>
</html>