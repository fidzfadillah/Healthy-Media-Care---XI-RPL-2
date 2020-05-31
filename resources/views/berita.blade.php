<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" href="{{asset('/assets/css/berita.css')}}">
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

        .geser{
            transition: 0.4s;
            margin-right: 10vh;
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
            <a href="{{ url('/home#kasus') }}">Data</a>
            <a href="{{ url('/kontak') }}">Call Center & RS Rujukan</a>
            <a href="https://www.halodoc.com/layanan-rapid-test">Rapid Test Drivethru</a>
            <a href="{{ url('/admin') }}" id="adm-log">Admin</a>
        </div>
    </div>
    <div class="container">
        <div class="title">
            <h1>Berita Terkini</h1>
            <h2>Seputar COVID-19</h2>
        </div>
        <div class="content">
            <div class="news">
                <a href="#">
                    <div class="news-con">
                        <div class="news-con-left">
                            <h3>Kabar Gembira, Antibodi Virus Corona Ditemukan</h3>
                            <p><i>Rabu, 13 Mei 2020</i></p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, qui voluptatibus eum pariatur maxime ipsa exercitationem accusamus vero odit, cupiditate totam architecto quidem non sapiente tempora. Commodi odit fugit praesentium?</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="news-con">
                        <div class="news-con-left">
                            <h3>Kabar Gembira, Antibodi Virus Corona Ditemukan</h3>
                            <p><i>Rabu, 13 Mei 2020</i></p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, qui voluptatibus eum pariatur maxime ipsa exercitationem accusamus vero odit, cupiditate totam architecto quidem non sapiente tempora. Commodi odit fugit praesentium?</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="news-con">
                        <div class="news-con-left">
                            <h3>Kabar Gembira, Antibodi Virus Corona Ditemukan</h3>
                            <p><i>Rabu, 13 Mei 2020</i></p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, qui voluptatibus eum pariatur maxime ipsa exercitationem accusamus vero odit, cupiditate totam architecto quidem non sapiente tempora. Commodi odit fugit praesentium?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="widget">
                <!-- widget humas jabar --> 
                <div id="widget-humas-jabar"></div>
                <script src="http://humas.jabarprov.go.id/js/widget-humas.min.js"></script>
            </div>
        </div>
    </div>

    <button id="btnTop"><i class="fas fa-arrow-up"></i></button>
    <a href="https://api.whatsapp.com/send?phone=6285697391854&text=Halo%20Admin%21%20Saya%20ingin%20tanya%20seputar%20PIKOBAR&source=&data=&app_absent=">
        <button id="btnWa"><i class="fab fa-whatsapp"></i></button>
    </a>
    
    <script>
        $(".btn").on("click",function(){
            $('.menu').toggleClass("show");
            document.getElementById("navbar").className = "trans";
        });

        window.onscroll = function() {scrollfunction()};

        function scrollfunction() {
            if(document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
                document.getElementById("navbar").className = "scroll";
                document.getElementById("btnWa").className = "geser";
                $('#btnTop').fadeIn();
                
            } else {
                document.getElementById("navbar").className = "";
                document.getElementById("btnWa").className = "";
                $('#btnTop').fadeOut();
            }
        }

        //button scroll to top
        $("#btnTop").click(function() {
            $('html, body').animate({scrollTop : 0}, 1000);
        });

        //animate on scroll
        // AOS.init();
    </script>
</body>
</html>