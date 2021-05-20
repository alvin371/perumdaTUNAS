<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Favicons -->
    <link rel="stylesheet" type="text/css" href="{{asset('cssHome/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cssHome/assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('cssHome/assets/css/templatemo-breezed.css')}}">
    <link rel="stylesheet" href="{{asset('cssHome/assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('cssHome/assets/css/lightbox.css')}}">
    <!-- Favicons -->
    <link href="{{asset('cssHome/img/tunaslogo.jpeg')}}" rel="icon">
    <link href="{{asset('cssHome/img/tunaslogo.jpeg')}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{asset('cssHome/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="{{asset('cssHome/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('cssHome/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('cssHome/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('cssHome/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('cssHome/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- School -->
    <link rel="stylesheet" href="{{asset('cssHome/assets1/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('cssHome/assets1/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('cssHome/assets1/css/lightbox.css')}}">
    <!-- Main Stylesheet File -->
    <link href="{{asset('cssHome/css/style.css')}}" rel="stylesheet">

    </script>
</head>

<body>
    <!--========================== Header ============================-->
    <header id="header">

        <div class="container">
            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light">
                    <a href="#" class="scrollto">
                        <img src="{{asset('cssHome/img/logo.png')}}" alt="">
                    </a>
                </h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{url('/profile')}}">Profil</a>
                    </li>
                    <li class="drop-down">
                        <a href="">Informasi</a>
                        <ul>
                            <li>
                                <a href="{{url('/berita')}}">Berita</a>
                            </li>
                            <li>
                                <a href="{{url('/pengumuman')}}">Pengumuman</a>
                            </li>
                            <li>
                                <a href="{{url('/artikel')}}">Artikel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/layanan')}}">Layanan</a>
                    </li>
                    <li>
                        <a href="{{url('/fasilitas')}}">Fasilitas</a>
                    </li>
                    <li>
                        <a href="{{url('/produk')}}">Produk</a>
                    </li>
                    <li>
                        <a href="#">LPSE Website</a>
                    </li>
                </ul>
            </nav>
            <!-- .main-nav -->
        </div>
    </header>
    <!-- #header -->
    @yield('container')
    <!--========================== Footer ============================-->
    <!-- Site footer -->
    <div class="site-footer">
        <div class="m-5">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-6"><img src="{{asset('cssHome/img/tunas.png')}}" style="width: 300px;" alt=""></div>
                        <div class="col-6">
                            <h6>Tugu Aneka Usaha</h6>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>

                </div>


                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">Profil</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">Berita</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">Pengumuman</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Artikel</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Layanan</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Fasilitas</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Produk</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">LPSE Website</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12 text-center">
                    <p class="copyright-text">Copyright &copy; 2020 Tugu Aneka Usaha
                        <a href="#">Malang</a>.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
    <script src="{{asset('cssHome/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('cssHome/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('cssHome/assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('cssHome/assets/js/popper.js')}}"></script>
    <script src="{{asset('cssHome/assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('cssHome/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('cssHome/assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('cssHome/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('cssHome/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('cssHome/assets/js/imgfix.min.js')}}"></script>
    <script src="{{asset('cssHome/assets/js/slick.js')}}"></script>
    <script src="{{asset('cssHome/assets/js/lightbox.js')}}"></script>
    <script src="{{asset('cssHome/assets/js/isotope.js')}}"></script>
    <!-- School -->
    <script src="{{asset('cssHome/assets1/js/isotope.')}}"></script>
    <script src="{{asset('cssHome/assets1/js/owl-carousel.js')}}"></script>
    <script src="{{asset('cssHome/assets1/js/lightbox.js')}}"></script>
    <script src="{{asset('cssHome/assets1/js/tabs.js')}}"></script>
    <script src="{{asset('cssHome/assets1/js/video.js')}}"></script>
    <script src="{{asset('cssHome/assets1/js/slick-slider.js')}}"></script>
    <script src="{{asset('cssHome/assets1/js/custom.js')}}"></script>

    <!-- Global Init -->
    <script src="{{asset('cssHome/assets/js/custom.js')}}"></script>

    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

    </script>

    <!-- JavaScript Libraries -->
    <script src="{{asset('cssHome/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/bootstrap/js')}}/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('cssHome/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('cssHome/lib/lightbox/js')}}/lightbox.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('cssHome/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('cssHome/js/main.js')}}"></script>

</body>

</html>