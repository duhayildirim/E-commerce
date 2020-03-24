<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Duhaninmelekleri.com</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="{{route('main')}}" class="site-logo">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form" action="{{route('search')}}" method="post">
                        {{csrf_field()}}
                        <input name="search" type="text" placeholder="Site içi arama yap...">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="{{route('loginweb')}}">Giriş Yap&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <i class="flaticon-profile"></i>
                            <a href="{{route('registerweb')}}">Üyelik Oluştur</a>
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
{{--                                <span>0</span>--}}
                            </div>
                            <a href="{{route('basket')}}">Sepetin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar" align="center">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="{{route('main')}}">ANA SAYFA</a></li>
                <li><a href="{{route('woman')}}">KADINA DAİR</a></li>
                <li><a href="{{route('gentleman')}}">CENTİLMENLER <span class="new">yeni</span> </a> </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Header section end -->
@yield('content')


<!-- Footer section -->
<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">
            <a href="{{route('main')}}"><img src="./img/logo.png" alt=""></a>
        </div>
        <div class="row">
            <div class="text-center">
                <div class="footer-widget about-widget">
                    <h2>Mİsyonumuz</h2>
                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                    <img src="img/cards.png" alt="">
                    <a href="{{route('contact')}}" class="site-btn sb-line">BİZE ULAŞIN</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>iletİşİm</h2>
                    <div class="con-info">
                        <span>C.</span>
                        <p>Your Company Ltd </p>
                    </div>
                    <div class="con-info">
                        <span>B.</span>
                        <p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
                    </div>
                    <div class="con-info">
                        <span>T.</span>
                        <p>+53 345 7953 32453</p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p>office@youremail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container text-center">
            <div class="social-links">
                <a href="#" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="#" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>

            </div>


            <p class="text-white text-center mt-5">Design and Coder by | Duha YILDIRIM </p>


        </div>
    </div>
</section>
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
