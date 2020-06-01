<?php
    function cek_internet(){
        $connected = @fsockopen("www.google.com", 80);
        if ($connected){
            $is_conn = true; //jika koneksi tersambung
            fclose($connected);
        } else {
            $is_conn = false; //jika koneksi gagal
        }
     return $is_conn;
    }
    // $tanggal = mktime(date('m'), date("d"), date('Y'));
    date_default_timezone_set("Asia/Jakarta");

    function resourceWeb($url) {
        $data = curl_init();
        curl_setopt($data, CURLOPT_URL, $url);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);

        $hasil = curl_exec($data);
        curl_close($data);
        return $hasil;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ff920a">
    <title>Healthy Media Care</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/home.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ff74694b5e.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style stylesheet="text/css">
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
            <a href="#kasus">Data</a>
            <a href="{{ url('/news') }}">Berita</a>
            <a href="{{ url('/kontak') }}">Call Center & RS Rujukan</a>
            <a href="https://www.halodoc.com/layanan-rapid-test">Rapid Test Drivethru</a>
            <a href="{{ url('/admin') }}">Admin</a>
        </div>
    </div>

    <section id="sec-top">
            <div class="container">
                    <div class="image">
                        <img src="{{ asset('/assets/pict/virus.png') }}" alt="">
                    </div>
                    <div class="intro">
                        <h1>Bersatu melawan <br> Covid-19</h1>
                        <p>"Yakinlah, terkadang kesedihan kemarin akan <br> menjadi
                            kebahagiaan untuk hari ini jika kita <br> bangkit dari
                            keterpurukan."</p>
                        <div class="buttonn">
                            <a href="#kasus"><button>Statistik</button></a>&emsp;
                            <a href="#sec-bot"><button>Pengetahuan</button></a>&emsp;
                            <a href="#cegah"><button>Pencegahan</button></a>&emsp;
                        </div>
                    </div>
                </div>
    </section>

    <section id="kasus">
        <div id="container">
            <h1>info kasus penyebaran</h1>
            <!-- tambah ?dark=true klo mau dark mode-->
            <iframe src="https://widget.kopi.dev/corona"></iframe>
            
            <?php
                if (cek_internet() == true){
                    $sumber = resourceWeb("https://kawalcorona.com/");
                    $positif = explode("<thead>", $sumber);
                    $positifLagi = explode("<td>Daerah Istimewa Yogyakarta</td>", $positif[1]);

                    echo "<table border='1' cellspacing='0' style='margin: auto; width: 100%; background: rgba(255,255,255,0.7);'>";
                    echo "<thead>";
                    echo $positifLagi[0];
                    echo "</tr></tbody></table>";
                } else {
                    echo "<div style='background: rgba(255, 255, 255, 0.7); padding: 5vh; text-align: center; border-radius: 5px'>";
                    echo "<h2>Nyalakan koneksi internet untuk melihat data</h2>";
                    echo "</div>";
                }
                
            ?>
            <br><br>
            <center><p><a href="https://kawalcorona.com" style='text-decoration: none; font-size: 20px; color: rgb(255, 59, 134);'>Lihat Selengkapnya</a></p><p>Sumber Data : Kementerian Kesehatan & JHU</p></center>
            
        </div>
    </section>

    <section id="sec-bot">
        <center><div class="title-con"><h1>Apa yang harus kamu</h1><h1>ketahui tentang covid-19?</h1></div></center>
    
        <div class="content">
            <div class="img-con">
                <img src="{{ asset('/assets/pict/orang.png') }}" alt="">
            </div>
            <div class="txt-con">
                <h2>Apa itu virus Corona atau Sars-nCov2 ?</h2>
                <p>Covid-19 adalah penyakit yang disebabkan oleh Novel Coronavirus (Sars-nCov2).
                Jenis terbaru Coronavirus yang menjangkit manusia dapat menyebabkan penyakit mulai dari Flu biasa
                hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan
                Sindrom pernapasan akut berat atau Severe Acute Respiratory Syndrome (SARS).</p>
                <p>Pada 11 Februari 2020, World Health Organization (WHO) mengumumkan nama penyakit.</p>
                <br>
                <h2>Seberapa bahaya sih ?</h2>
                <p>Sepeti penyakit pernapasan lainnya, infeksi 2019-Ncav dapat menyebabkan gejala
                ringan seperti batuk, pilek, sakit tenggorokan, dan demam.</p>
                <p>Kondisi ini bisa menjadi lebih parah bagi beberapa orang dan dapat menyebabkan
                Pneumonia atau kesulitan bernapas. Orangtua dan orang-orang yang
                sebelumnya memiliki riwayat menderita penyakit lain seperti Diabetes dan
                penyakit jantung lebih rentan mengalami kondisi parah jika terkena virus ini.</p>
            </div>
        </div>
    </section>

    <section id="cegah">
        <div class="top">
            <div class="top-left">
                <h1>sayangi dirimu sendiri <br> dan orang lain</h1><br>
                <p>Sampai saat ini virus Corona atau Sars-nCov2 belum menemui  
                    titik terang. Para ilmuwan dan ahli kesehatan belum menemukan obat  
                    ataupun vaksin untuk kita. Nah, masih ada cara agar kita  bisa menghindarinya, karena jika bukan kita yang tertular, kita yang  
                    menularkan.</p>
            </div>
            <div class="top-right">
                <img src="{{ asset('/assets/pict/kuy.png') }}" alt="">
            </div>
        </div>
        <div class="mid">
            <div class="cards">
                <div class="imgBox">
                    <img src="{{ asset('/assets/pict/mask.png') }}" alt="">
                </div>
                <div class="txt">
                    <p>Pakai masker jika 
                    harus keluar rumah</p>
                </div>
            </div>
            <div class="cards">
                <div class="imgBox">
                    <img src="{{ asset('/assets/pict/Ramai.png') }}" alt="">
                </div>
                <div class="txt">
                    <p>Jauhi kerumunan 
                    orang yang banyak</p>
                </div>
            </div>
            <div class="cards">
                <div class="imgBox">
                    <img src="{{ asset('/assets/pict/rmh.png') }}" alt="">
                </div>
                <div class="txt">
                    <p>Tetap di rumah jika 
                    tidak ada keperluan</p>
                </div>
            </div>
            <div class="cards">
                <div class="imgBox">
                    <img src="{{ asset('/assets/pict/CC.png') }}" alt="">
                </div>
                <div class="txt">
                    <p>Selalu mencuci tangan 
                    setelah melakukan sesuatu</p>
                </div>
            </div>
            <div class="cards">
                <div class="imgBox">
                    <img src="{{ asset('/assets/pict/Larangan.png') }}" alt="">
                </div>
                <div class="txt">
                    <p>Hindari memegang mata, 
                    hidung, dan mulut</p>
                </div>
            </div>
        </div>
    
        <div class="bot">
            <div class="bot-title">
                <h1>pentingnya social distancing</h1>
            </div>

            <div class="bot-con">
                <div class="bot-img">
                    <img src="{{ asset('assets/pict/pdN.png') }}" alt="">
                </div>
                <div class="bot-txt">
                    <h2>Kenapa sih harus Social Distancing?</h2><br>
                    <p>COVID-19 atau yang kita kenal sebagai  
                        Virus Corona bisa dengan cepat menyebar. 
                        Orang dapat terinfeksi tanpa memperlihatkan  
                        gejalanya, namun tetap dapat menyebarkan 
                        orang lain. Jika kita tidak mau melakukan 
                        gerakan "di rumah saja" atau melakukan upaya 
                        pencegahan seperti menghindari keramaian,  
                        jumlah orang yang tersebar akan seperti 
                        bom waktu yang akan meledak seketika, 
                        dan fasilitas kesehatan akan kewalahan 
                        dan tidak dapat menangani virus ini. 
                        Makanya, yuk kita tetap di rumah saja, dan 
                        terapkan social distancing.</p>
                </div>
            </div>
        </div>
    </div>
    </section>

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